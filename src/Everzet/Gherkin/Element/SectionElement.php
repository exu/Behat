<?php

namespace Everzet\Gherkin\Element;

use Everzet\Gherkin\I18n;

/*
 * This file is part of the behat package.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Section.
 *
 * @package     Gherkin
 * @author      Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class SectionElement
{
    protected $title = '';
    protected $tags = array();
    protected $i18n;
    protected $file;

    public function __construct(I18n $i18n, $file = null)
    {
        $this->file = $file;
        $this->i18n = $i18n;
    }

    public function getI18n()
    {
        return $this->i18n;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function addTags(array $tags)
    {
        $this->tags = array_merge($this->tags, $tags);
    }

    public function hasTags()
    {
        return count($this->tags) > 0;
    }

    public function hasTag($tag)
    {
        return in_array($tag, $this->tags);
    }

    public function getTags()
    {
        return $this->tags;
    }
}

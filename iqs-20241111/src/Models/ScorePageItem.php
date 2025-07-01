<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ScorePageItem extends Model
{
    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $displayLink;

    /**
     * @var string
     */
    public $hostLogo;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $htmlSnippet;

    /**
     * @var string
     */
    public $htmlTitle;

    /**
     * @var IncludeImage[]
     */
    public $images;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $mainText;

    /**
     * @var string
     */
    public $markdownText;

    /**
     * @var string
     */
    public $mime;

    /**
     * @var string[]
     */
    public $pageMap;

    /**
     * @var int
     */
    public $publishTime;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $siteLabel;

    /**
     * @var string
     */
    public $snippet;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cardType' => 'cardType',
        'displayLink' => 'displayLink',
        'hostLogo' => 'hostLogo',
        'hostname' => 'hostname',
        'htmlSnippet' => 'htmlSnippet',
        'htmlTitle' => 'htmlTitle',
        'images' => 'images',
        'link' => 'link',
        'mainText' => 'mainText',
        'markdownText' => 'markdownText',
        'mime' => 'mime',
        'pageMap' => 'pageMap',
        'publishTime' => 'publishTime',
        'score' => 'score',
        'siteLabel' => 'siteLabel',
        'snippet' => 'snippet',
        'summary' => 'summary',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->pageMap)) {
            Model::validateArray($this->pageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardType) {
            $res['cardType'] = $this->cardType;
        }

        if (null !== $this->displayLink) {
            $res['displayLink'] = $this->displayLink;
        }

        if (null !== $this->hostLogo) {
            $res['hostLogo'] = $this->hostLogo;
        }

        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }

        if (null !== $this->htmlSnippet) {
            $res['htmlSnippet'] = $this->htmlSnippet;
        }

        if (null !== $this->htmlTitle) {
            $res['htmlTitle'] = $this->htmlTitle;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        if (null !== $this->mainText) {
            $res['mainText'] = $this->mainText;
        }

        if (null !== $this->markdownText) {
            $res['markdownText'] = $this->markdownText;
        }

        if (null !== $this->mime) {
            $res['mime'] = $this->mime;
        }

        if (null !== $this->pageMap) {
            if (\is_array($this->pageMap)) {
                $res['pageMap'] = [];
                foreach ($this->pageMap as $key1 => $value1) {
                    $res['pageMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->publishTime) {
            $res['publishTime'] = $this->publishTime;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->siteLabel) {
            $res['siteLabel'] = $this->siteLabel;
        }

        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardType'])) {
            $model->cardType = $map['cardType'];
        }

        if (isset($map['displayLink'])) {
            $model->displayLink = $map['displayLink'];
        }

        if (isset($map['hostLogo'])) {
            $model->hostLogo = $map['hostLogo'];
        }

        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }

        if (isset($map['htmlSnippet'])) {
            $model->htmlSnippet = $map['htmlSnippet'];
        }

        if (isset($map['htmlTitle'])) {
            $model->htmlTitle = $map['htmlTitle'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1] = IncludeImage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['mainText'])) {
            $model->mainText = $map['mainText'];
        }

        if (isset($map['markdownText'])) {
            $model->markdownText = $map['markdownText'];
        }

        if (isset($map['mime'])) {
            $model->mime = $map['mime'];
        }

        if (isset($map['pageMap'])) {
            if (!empty($map['pageMap'])) {
                $model->pageMap = [];
                foreach ($map['pageMap'] as $key1 => $value1) {
                    $model->pageMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['publishTime'])) {
            $model->publishTime = $map['publishTime'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['siteLabel'])) {
            $model->siteLabel = $map['siteLabel'];
        }

        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class UnifiedPageItem extends Model
{
    /**
     * @var string
     */
    public $hostLogo;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string[]
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
     * @example 2025-04-07T10:15:30.123+08:00
     *
     * @var string
     */
    public $publishedTime;

    /**
     * @var float
     */
    public $rerankScore;

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
        'hostLogo' => 'hostLogo',
        'hostname' => 'hostname',
        'images' => 'images',
        'link' => 'link',
        'mainText' => 'mainText',
        'markdownText' => 'markdownText',
        'publishedTime' => 'publishedTime',
        'rerankScore' => 'rerankScore',
        'snippet' => 'snippet',
        'summary' => 'summary',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostLogo) {
            $res['hostLogo'] = $this->hostLogo;
        }
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->images) {
            $res['images'] = $this->images;
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
        if (null !== $this->publishedTime) {
            $res['publishedTime'] = $this->publishedTime;
        }
        if (null !== $this->rerankScore) {
            $res['rerankScore'] = $this->rerankScore;
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

    /**
     * @param array $map
     *
     * @return UnifiedPageItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hostLogo'])) {
            $model->hostLogo = $map['hostLogo'];
        }
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = $map['images'];
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
        if (isset($map['publishedTime'])) {
            $model->publishedTime = $map['publishedTime'];
        }
        if (isset($map['rerankScore'])) {
            $model->rerankScore = $map['rerankScore'];
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

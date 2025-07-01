<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostLogo) {
            $res['hostLogo'] = $this->hostLogo;
        }

        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1] = $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1] = $item1;
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

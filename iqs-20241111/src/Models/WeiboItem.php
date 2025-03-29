<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class WeiboItem extends Model
{
    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $homepageLink;

    /**
     * @var string
     */
    public $htmlSnippet;

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
    public $publishDisplayTime;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'cardType' => 'cardType',
        'homepageLink' => 'homepageLink',
        'htmlSnippet' => 'htmlSnippet',
        'images' => 'images',
        'link' => 'link',
        'publishDisplayTime' => 'publishDisplayTime',
        'username' => 'username',
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
        if (null !== $this->cardType) {
            $res['cardType'] = $this->cardType;
        }

        if (null !== $this->homepageLink) {
            $res['homepageLink'] = $this->homepageLink;
        }

        if (null !== $this->htmlSnippet) {
            $res['htmlSnippet'] = $this->htmlSnippet;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        if (null !== $this->publishDisplayTime) {
            $res['publishDisplayTime'] = $this->publishDisplayTime;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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

        if (isset($map['homepageLink'])) {
            $model->homepageLink = $map['homepageLink'];
        }

        if (isset($map['htmlSnippet'])) {
            $model->htmlSnippet = $map['htmlSnippet'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1++] = $item1;
                }
            }
        }

        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['publishDisplayTime'])) {
            $model->publishDisplayTime = $map['publishDisplayTime'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}

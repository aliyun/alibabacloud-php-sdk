<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class Message2ThirdChannel extends Model
{
    /**
     * @var int
     */
    public $setBadge;

    /**
     * @var int
     */
    public $addBadge;

    /**
     * @var string
     */
    public $bigBody;

    /**
     * @var string
     */
    public $bigTitle;

    /**
     * @var string
     */
    public $expandImage;

    /**
     * @var string
     */
    public $img;

    /**
     * @var string
     */
    public $sound;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'setBadge' => 'SetBadge',
        'addBadge' => 'addBadge',
        'bigBody' => 'bigBody',
        'bigTitle' => 'bigTitle',
        'expandImage' => 'expandImage',
        'img' => 'img',
        'sound' => 'sound',
        'text' => 'text',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->setBadge) {
            $res['SetBadge'] = $this->setBadge;
        }

        if (null !== $this->addBadge) {
            $res['addBadge'] = $this->addBadge;
        }

        if (null !== $this->bigBody) {
            $res['bigBody'] = $this->bigBody;
        }

        if (null !== $this->bigTitle) {
            $res['bigTitle'] = $this->bigTitle;
        }

        if (null !== $this->expandImage) {
            $res['expandImage'] = $this->expandImage;
        }

        if (null !== $this->img) {
            $res['img'] = $this->img;
        }

        if (null !== $this->sound) {
            $res['sound'] = $this->sound;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['SetBadge'])) {
            $model->setBadge = $map['SetBadge'];
        }

        if (isset($map['addBadge'])) {
            $model->addBadge = $map['addBadge'];
        }

        if (isset($map['bigBody'])) {
            $model->bigBody = $map['bigBody'];
        }

        if (isset($map['bigTitle'])) {
            $model->bigTitle = $map['bigTitle'];
        }

        if (isset($map['expandImage'])) {
            $model->expandImage = $map['expandImage'];
        }

        if (isset($map['img'])) {
            $model->img = $map['img'];
        }

        if (isset($map['sound'])) {
            $model->sound = $map['sound'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

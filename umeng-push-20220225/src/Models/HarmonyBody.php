<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class HarmonyBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $addBadge;

    /**
     * @var string
     */
    public $afterOpen;

    /**
     * @var string
     */
    public $bigBody;

    /**
     * @var string
     */
    public $custom;

    /**
     * @var string
     */
    public $img;

    /**
     * @var string
     */
    public $largeIcon;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'action'    => 'action',
        'addBadge'  => 'addBadge',
        'afterOpen' => 'afterOpen',
        'bigBody'   => 'bigBody',
        'custom'    => 'custom',
        'img'       => 'img',
        'largeIcon' => 'largeIcon',
        'text'      => 'text',
        'title'     => 'title',
        'uri'       => 'uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->addBadge) {
            $res['addBadge'] = $this->addBadge;
        }
        if (null !== $this->afterOpen) {
            $res['afterOpen'] = $this->afterOpen;
        }
        if (null !== $this->bigBody) {
            $res['bigBody'] = $this->bigBody;
        }
        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }
        if (null !== $this->img) {
            $res['img'] = $this->img;
        }
        if (null !== $this->largeIcon) {
            $res['largeIcon'] = $this->largeIcon;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HarmonyBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['addBadge'])) {
            $model->addBadge = $map['addBadge'];
        }
        if (isset($map['afterOpen'])) {
            $model->afterOpen = $map['afterOpen'];
        }
        if (isset($map['bigBody'])) {
            $model->bigBody = $map['bigBody'];
        }
        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }
        if (isset($map['img'])) {
            $model->img = $map['img'];
        }
        if (isset($map['largeIcon'])) {
            $model->largeIcon = $map['largeIcon'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}

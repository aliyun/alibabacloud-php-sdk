<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class Body extends Model
{
    /**
     * @var string
     */
    public $activity;

    /**
     * @var int
     */
    public $addBadge;

    /**
     * @var string
     */
    public $afterOpen;

    /**
     * @var int
     */
    public $builderId;

    /**
     * @var string
     */
    public $custom;

    /**
     * @var string
     */
    public $expandImage;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $img;

    /**
     * @var string
     */
    public $largeIcon;

    /**
     * @var bool
     */
    public $playLights;

    /**
     * @var bool
     */
    public $playSound;

    /**
     * @var bool
     */
    public $playVibrate;

    /**
     * @var int
     */
    public $rePop;

    /**
     * @var int
     */
    public $setBadge;

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

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'activity'    => 'activity',
        'addBadge'    => 'addBadge',
        'afterOpen'   => 'afterOpen',
        'builderId'   => 'builderId',
        'custom'      => 'custom',
        'expandImage' => 'expandImage',
        'icon'        => 'icon',
        'img'         => 'img',
        'largeIcon'   => 'largeIcon',
        'playLights'  => 'playLights',
        'playSound'   => 'playSound',
        'playVibrate' => 'playVibrate',
        'rePop'       => 'rePop',
        'setBadge'    => 'setBadge',
        'sound'       => 'sound',
        'text'        => 'text',
        'title'       => 'title',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activity) {
            $res['activity'] = $this->activity;
        }
        if (null !== $this->addBadge) {
            $res['addBadge'] = $this->addBadge;
        }
        if (null !== $this->afterOpen) {
            $res['afterOpen'] = $this->afterOpen;
        }
        if (null !== $this->builderId) {
            $res['builderId'] = $this->builderId;
        }
        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }
        if (null !== $this->expandImage) {
            $res['expandImage'] = $this->expandImage;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->img) {
            $res['img'] = $this->img;
        }
        if (null !== $this->largeIcon) {
            $res['largeIcon'] = $this->largeIcon;
        }
        if (null !== $this->playLights) {
            $res['playLights'] = $this->playLights;
        }
        if (null !== $this->playSound) {
            $res['playSound'] = $this->playSound;
        }
        if (null !== $this->playVibrate) {
            $res['playVibrate'] = $this->playVibrate;
        }
        if (null !== $this->rePop) {
            $res['rePop'] = $this->rePop;
        }
        if (null !== $this->setBadge) {
            $res['setBadge'] = $this->setBadge;
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
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activity'])) {
            $model->activity = $map['activity'];
        }
        if (isset($map['addBadge'])) {
            $model->addBadge = $map['addBadge'];
        }
        if (isset($map['afterOpen'])) {
            $model->afterOpen = $map['afterOpen'];
        }
        if (isset($map['builderId'])) {
            $model->builderId = $map['builderId'];
        }
        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }
        if (isset($map['expandImage'])) {
            $model->expandImage = $map['expandImage'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['img'])) {
            $model->img = $map['img'];
        }
        if (isset($map['largeIcon'])) {
            $model->largeIcon = $map['largeIcon'];
        }
        if (isset($map['playLights'])) {
            $model->playLights = $map['playLights'];
        }
        if (isset($map['playSound'])) {
            $model->playSound = $map['playSound'];
        }
        if (isset($map['playVibrate'])) {
            $model->playVibrate = $map['playVibrate'];
        }
        if (isset($map['rePop'])) {
            $model->rePop = $map['rePop'];
        }
        if (isset($map['setBadge'])) {
            $model->setBadge = $map['setBadge'];
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
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}

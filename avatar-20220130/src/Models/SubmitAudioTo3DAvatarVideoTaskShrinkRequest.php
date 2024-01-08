<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SubmitAudioTo3DAvatarVideoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

    /**
     * @var string
     */
    public $audioInfoShrink;

    /**
     * @var string
     */
    public $avatarInfoShrink;

    /**
     * @var bool
     */
    public $callback;

    /**
     * @var string
     */
    public $callbackParams;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @example xxxx
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $videoInfoShrink;
    protected $_name = [
        'appShrink'        => 'App',
        'audioInfoShrink'  => 'AudioInfo',
        'avatarInfoShrink' => 'AvatarInfo',
        'callback'         => 'Callback',
        'callbackParams'   => 'CallbackParams',
        'extParams'        => 'ExtParams',
        'tenantId'         => 'TenantId',
        'title'            => 'Title',
        'url'              => 'Url',
        'videoInfoShrink'  => 'VideoInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
        }
        if (null !== $this->audioInfoShrink) {
            $res['AudioInfo'] = $this->audioInfoShrink;
        }
        if (null !== $this->avatarInfoShrink) {
            $res['AvatarInfo'] = $this->avatarInfoShrink;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->callbackParams) {
            $res['CallbackParams'] = $this->callbackParams;
        }
        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->videoInfoShrink) {
            $res['VideoInfo'] = $this->videoInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAudioTo3DAvatarVideoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
        }
        if (isset($map['AudioInfo'])) {
            $model->audioInfoShrink = $map['AudioInfo'];
        }
        if (isset($map['AvatarInfo'])) {
            $model->avatarInfoShrink = $map['AvatarInfo'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CallbackParams'])) {
            $model->callbackParams = $map['CallbackParams'];
        }
        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['VideoInfo'])) {
            $model->videoInfoShrink = $map['VideoInfo'];
        }

        return $model;
    }
}

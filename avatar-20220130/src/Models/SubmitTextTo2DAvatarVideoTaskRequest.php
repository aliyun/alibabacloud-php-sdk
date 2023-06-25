<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest\app;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest\audioInfo;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest\avatarInfo;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitTextTo2DAvatarVideoTaskRequest\videoInfo;
use AlibabaCloud\Tea\Model;

class SubmitTextTo2DAvatarVideoTaskRequest extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var audioInfo
     */
    public $audioInfo;

    /**
     * @var avatarInfo
     */
    public $avatarInfo;

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
     * @example xxxxx
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;

    /**
     * @var videoInfo
     */
    public $videoInfo;
    protected $_name = [
        'app'            => 'App',
        'audioInfo'      => 'AudioInfo',
        'avatarInfo'     => 'AvatarInfo',
        'callback'       => 'Callback',
        'callbackParams' => 'CallbackParams',
        'extParams'      => 'ExtParams',
        'tenantId'       => 'TenantId',
        'text'           => 'Text',
        'title'          => 'Title',
        'videoInfo'      => 'VideoInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toMap() : null;
        }
        if (null !== $this->audioInfo) {
            $res['AudioInfo'] = null !== $this->audioInfo ? $this->audioInfo->toMap() : null;
        }
        if (null !== $this->avatarInfo) {
            $res['AvatarInfo'] = null !== $this->avatarInfo ? $this->avatarInfo->toMap() : null;
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
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTextTo2DAvatarVideoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['AudioInfo'])) {
            $model->audioInfo = audioInfo::fromMap($map['AudioInfo']);
        }
        if (isset($map['AvatarInfo'])) {
            $model->avatarInfo = avatarInfo::fromMap($map['AvatarInfo']);
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoInfo'])) {
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }

        return $model;
    }
}

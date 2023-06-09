<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest\app;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest\avatarInfo;
use AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskRequest\videoInfo;
use AlibabaCloud\Tea\Model;

class SubmitAudioTo3DAvatarVideoTaskRequest extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var avatarInfo
     */
    public $avatarInfo;

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
     * @var videoInfo
     */
    public $videoInfo;
    protected $_name = [
        'app'        => 'App',
        'avatarInfo' => 'AvatarInfo',
        'tenantId'   => 'TenantId',
        'title'      => 'Title',
        'url'        => 'Url',
        'videoInfo'  => 'VideoInfo',
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
        if (null !== $this->avatarInfo) {
            $res['AvatarInfo'] = null !== $this->avatarInfo ? $this->avatarInfo->toMap() : null;
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
        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAudioTo3DAvatarVideoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }
        if (isset($map['AvatarInfo'])) {
            $model->avatarInfo = avatarInfo::fromMap($map['AvatarInfo']);
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
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }

        return $model;
    }
}

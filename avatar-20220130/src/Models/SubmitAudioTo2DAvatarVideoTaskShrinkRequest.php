<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SubmitAudioTo2DAvatarVideoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

    /**
     * @var string
     */
    public $avatarInfoShrink;

    /**
     * @example 20516
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
        'avatarInfoShrink' => 'AvatarInfo',
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
        if (null !== $this->avatarInfoShrink) {
            $res['AvatarInfo'] = $this->avatarInfoShrink;
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
     * @return SubmitAudioTo2DAvatarVideoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
        }
        if (isset($map['AvatarInfo'])) {
            $model->avatarInfoShrink = $map['AvatarInfo'];
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

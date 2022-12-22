<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class SubmitTextTo3DAvatarVideoTaskShrinkRequest extends Model
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
     * @example xxxx
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
     * @var string
     */
    public $videoInfoShrink;
    protected $_name = [
        'appShrink'        => 'App',
        'avatarInfoShrink' => 'AvatarInfo',
        'tenantId'         => 'TenantId',
        'text'             => 'Text',
        'title'            => 'Title',
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
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoInfoShrink) {
            $res['VideoInfo'] = $this->videoInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTextTo3DAvatarVideoTaskShrinkRequest
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoInfo'])) {
            $model->videoInfoShrink = $map['VideoInfo'];
        }

        return $model;
    }
}

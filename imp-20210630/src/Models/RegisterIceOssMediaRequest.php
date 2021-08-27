<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class RegisterIceOssMediaRequest extends Model
{
    /**
     * @description 工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description 回放cdn域名
     *
     * @var string
     */
    public $playbackUrlDomain;

    /**
     * @description oss bucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description oss域名
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description 回放地址的区域ID
     *
     * @var string
     */
    public $urlRegionId;

    /**
     * @description 待注册的媒资在相应系统中的地址
     *
     * @var string
     */
    public $mediaUrl;

    /**
     * @description 来源的服务
     *
     * @var string
     */
    public $fromType;

    /**
     * @description 媒资标题
     *
     * @var string
     */
    public $mediaTitle;

    /**
     * @description 唯一ID，比如直播uuid
     *
     * @var string
     */
    public $liveId;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'appId'             => 'AppId',
        'playbackUrlDomain' => 'PlaybackUrlDomain',
        'ossBucket'         => 'OssBucket',
        'ossEndpoint'       => 'OssEndpoint',
        'urlRegionId'       => 'UrlRegionId',
        'mediaUrl'          => 'MediaUrl',
        'fromType'          => 'FromType',
        'mediaTitle'        => 'MediaTitle',
        'liveId'            => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->playbackUrlDomain) {
            $res['PlaybackUrlDomain'] = $this->playbackUrlDomain;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->urlRegionId) {
            $res['UrlRegionId'] = $this->urlRegionId;
        }
        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }
        if (null !== $this->fromType) {
            $res['FromType'] = $this->fromType;
        }
        if (null !== $this->mediaTitle) {
            $res['MediaTitle'] = $this->mediaTitle;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterIceOssMediaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PlaybackUrlDomain'])) {
            $model->playbackUrlDomain = $map['PlaybackUrlDomain'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['UrlRegionId'])) {
            $model->urlRegionId = $map['UrlRegionId'];
        }
        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }
        if (isset($map['FromType'])) {
            $model->fromType = $map['FromType'];
        }
        if (isset($map['MediaTitle'])) {
            $model->mediaTitle = $map['MediaTitle'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateIceProjectRequest extends Model
{
    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description 回放地址的地址
     *
     * @var string
     */
    public $urlRegionId;

    /**
     * @description 工程标题
     *
     * @var string
     */
    public $projectTitle;

    /**
     * @description 封面
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 唯一ID，比如直播uuid
     *
     * @var string
     */
    public $liveId;
    protected $_name = [
        'appId'        => 'AppId',
        'urlRegionId'  => 'UrlRegionId',
        'projectTitle' => 'ProjectTitle',
        'coverURL'     => 'CoverURL',
        'liveId'       => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->urlRegionId) {
            $res['UrlRegionId'] = $this->urlRegionId;
        }
        if (null !== $this->projectTitle) {
            $res['ProjectTitle'] = $this->projectTitle;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIceProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UrlRegionId'])) {
            $model->urlRegionId = $map['UrlRegionId'];
        }
        if (isset($map['ProjectTitle'])) {
            $model->projectTitle = $map['ProjectTitle'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}

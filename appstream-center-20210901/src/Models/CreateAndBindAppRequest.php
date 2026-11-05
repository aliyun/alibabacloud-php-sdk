<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateAndBindAppRequest extends Model
{
    /**
     * @var string
     */
    public $appIconUrl;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $originAppType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $urlSuffix;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appIconUrl' => 'AppIconUrl',
        'appName' => 'AppName',
        'imageId' => 'ImageId',
        'originAppType' => 'OriginAppType',
        'port' => 'Port',
        'urlSuffix' => 'UrlSuffix',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIconUrl) {
            $res['AppIconUrl'] = $this->appIconUrl;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->originAppType) {
            $res['OriginAppType'] = $this->originAppType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->urlSuffix) {
            $res['UrlSuffix'] = $this->urlSuffix;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['AppIconUrl'])) {
            $model->appIconUrl = $map['AppIconUrl'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OriginAppType'])) {
            $model->originAppType = $map['OriginAppType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['UrlSuffix'])) {
            $model->urlSuffix = $map['UrlSuffix'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}

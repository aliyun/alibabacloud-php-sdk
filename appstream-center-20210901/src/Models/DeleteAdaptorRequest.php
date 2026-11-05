<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteAdaptorRequest extends Model
{
    /**
     * @var string
     */
    public $adaptorId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'adaptorId' => 'AdaptorId',
        'appId' => 'AppId',
        'appVersionId' => 'AppVersionId',
        'imageId' => 'ImageId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptorId) {
            $res['AdaptorId'] = $this->adaptorId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (isset($map['AdaptorId'])) {
            $model->adaptorId = $map['AdaptorId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponseBody;

use AlibabaCloud\Dara\Model;

class watermarkInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $watermarkConfig;

    /**
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'appId' => 'AppId',
        'creationTime' => 'CreationTime',
        'fileUrl' => 'FileUrl',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
        'type' => 'Type',
        'watermarkConfig' => 'WatermarkConfig',
        'watermarkId' => 'WatermarkId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }

        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}

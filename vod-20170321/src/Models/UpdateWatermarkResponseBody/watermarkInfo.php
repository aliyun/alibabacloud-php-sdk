<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponseBody;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $watermarkConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'type'            => 'Type',
        'isDefault'       => 'IsDefault',
        'fileUrl'         => 'FileUrl',
        'watermarkConfig' => 'WatermarkConfig',
        'name'            => 'Name',
        'watermarkId'     => 'WatermarkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermarkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}

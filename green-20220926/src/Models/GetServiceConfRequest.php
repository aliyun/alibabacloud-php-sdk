<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetServiceConfRequest extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $byDefault;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example image
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example pornographic
     *
     * @var string
     */
    public $scene;

    /**
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'byDefault' => 'ByDefault',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'scene' => 'Scene',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->byDefault) {
            $res['ByDefault'] = $this->byDefault;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ByDefault'])) {
            $model->byDefault = $map['ByDefault'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}

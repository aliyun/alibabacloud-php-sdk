<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetBackupConfigRequest extends Model
{
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
     * @example baselineCheck
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
        'serviceCode'  => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBackupConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}

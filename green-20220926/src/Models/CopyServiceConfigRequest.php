<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class CopyServiceConfigRequest extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example nickname_detection
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceDesc;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
        'serviceCode'  => 'ServiceCode',
        'serviceDesc'  => 'ServiceDesc',
        'serviceName'  => 'ServiceName',
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
        if (null !== $this->serviceDesc) {
            $res['ServiceDesc'] = $this->serviceDesc;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyServiceConfigRequest
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
        if (isset($map['ServiceDesc'])) {
            $model->serviceDesc = $map['ServiceDesc'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}

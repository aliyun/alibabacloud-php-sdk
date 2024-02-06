<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RescaleApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can query the application ID by calling the ListApplications operation.
     *
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @description The level of resource scaling. The value must be of the enumerated data type. Valid values:
     *
     *   AreaIspCode (default): scales resources based on the Internet service provider (ISP).
     *   RegionId: scales resources based on the edge node.
     *   InstanceId: scales resources based on the instance ID. Resource scale-out specifies resource hosting and scale-in specifies resource release.
     *
     * @example RegionId
     *
     * @var string
     */
    public $rescaleLevel;

    /**
     * @description The scaling operation. The value must be of the enumerated data type. Valid values:
     *
     *   Add: adds new resources.
     *   Del: releases resources.
     *
     * @example Add
     *
     * @var string
     */
    public $rescaleType;

    /**
     * @description The required resources. The value must be a JSON string.
     *
     * @example [{\"regionCode\": \"cn-wuxi-telecom_unicom_cmcc-3\",    \"ispCode\": \"telecom\",    \"count\": 2	},{    \"regionCode\": \"cn-shanghai-cmcc\",    \"count\": 4	}]
     *
     * @var string
     */
    public $resourceSelector;

    /**
     * @description The timeout period for asynchronous scaling. Unit: seconds. Default value: 300.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The version number of the application deployment package. By default, the stable version number is used. This parameter takes effect only when you perform resource scale-out.
     *
     * @example v2
     *
     * @var string
     */
    public $toAppVersion;
    protected $_name = [
        'appId'            => 'AppId',
        'rescaleLevel'     => 'RescaleLevel',
        'rescaleType'      => 'RescaleType',
        'resourceSelector' => 'ResourceSelector',
        'timeout'          => 'Timeout',
        'toAppVersion'     => 'ToAppVersion',
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
        if (null !== $this->rescaleLevel) {
            $res['RescaleLevel'] = $this->rescaleLevel;
        }
        if (null !== $this->rescaleType) {
            $res['RescaleType'] = $this->rescaleType;
        }
        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->toAppVersion) {
            $res['ToAppVersion'] = $this->toAppVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RescaleLevel'])) {
            $model->rescaleLevel = $map['RescaleLevel'];
        }
        if (isset($map['RescaleType'])) {
            $model->rescaleType = $map['RescaleType'];
        }
        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['ToAppVersion'])) {
            $model->toAppVersion = $map['ToAppVersion'];
        }

        return $model;
    }
}

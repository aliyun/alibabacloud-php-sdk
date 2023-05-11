<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryEdgeDriverVersionRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from Page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the driver. To obtain the driver ID, perform the following steps: Log on to the [Link IoT Edge console](https://iot.console.aliyun.com/le/instance/list). On the **Drivers** page, move the pointer over the name of the driver whose versions you want to query and obtain the driver ID.
     *
     * You can also call the [QueryEdgeDriver](~~155776~~) operation to query the driver ID.
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The version number of the driver. To query information about a specific driver version, set this parameter to the specific version number.
     *
     * @var string
     */
    public $driverVersion;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for the public instance but required for Enterprise Edition instances.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 30. Default value: 10.
     *
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the driver version. Valid values:
     *
     *   0: The driver version to be queried is not published.
     *   1: The driver version to be queried is published.
     *
     * @example 0
     *
     * @var int
     */
    public $versionState;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'driverId'      => 'DriverId',
        'driverVersion' => 'DriverVersion',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'versionState'  => 'VersionState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->versionState) {
            $res['VersionState'] = $this->versionState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEdgeDriverVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VersionState'])) {
            $model->versionState = $map['VersionState'];
        }

        return $model;
    }
}

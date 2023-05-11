<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryEdgeDriverRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1. If you specify a value smaller than 1, pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the driver whose information is to be queried. If you want to query information about drivers with a specific name, set this parameter.
     *
     * @example MyledDriver
     *
     * @var string
     */
    public $driverName;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for public instances. However, this parameter is required for the instances that you have purchased.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Maximum value: 30. Default value: 10. If you specify a value smaller than 1, a maximum of 10 entries are displayed on each page.
     *
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the driver whose information is to be queried. Valid values:
     *
     *   0: official driver
     *   1: custom driver
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'driverName'    => 'DriverName',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'type'          => 'Type',
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
        if (null !== $this->driverName) {
            $res['DriverName'] = $this->driverName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEdgeDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DriverName'])) {
            $model->driverName = $map['DriverName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

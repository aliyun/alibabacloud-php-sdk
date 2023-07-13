<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryEdgeInstanceRequest extends Model
{
    /**
     * @description The name of the edge instance.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Maximum value: 30. Default value: 10. If you specify a value smaller than 1, the system uses 10.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The error code. Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page from which the results are displayed. The minimum value is 1. If you specify a value smaller than 1, the system uses 1.
     *
     * @example 15
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'iotInstanceId' => 'IotInstanceId',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEdgeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

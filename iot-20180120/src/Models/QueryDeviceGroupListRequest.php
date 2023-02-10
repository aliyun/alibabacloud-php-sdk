<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceGroupListRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example GroupName1
     *
     * @var string
     */
    public $groupName;

    /**
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string[]
     */
    public $groupTypes;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 8vDubXr4nUvZkNgk9mle010200
     *
     * @var string
     */
    public $superGroupId;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'groupName'     => 'GroupName',
        'groupTypes'    => 'GroupTypes',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'superGroupId'  => 'SuperGroupId',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupTypes) {
            $res['GroupTypes'] = $this->groupTypes;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->superGroupId) {
            $res['SuperGroupId'] = $this->superGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceGroupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupTypes'])) {
            if (!empty($map['GroupTypes'])) {
                $model->groupTypes = $map['GroupTypes'];
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SuperGroupId'])) {
            $model->superGroupId = $map['SuperGroupId'];
        }

        return $model;
    }
}

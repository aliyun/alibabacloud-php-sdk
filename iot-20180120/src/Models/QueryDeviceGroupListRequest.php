<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceGroupListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the group.
     *
     *   If you specify this parameter, the system queries groups by group name. You can perform a fuzzy search by group name.
     *   If you do not specify this parameter, the system queries all groups.
     *
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
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of the entries to return on each page. Maximum value: 200. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the parent group. If you need to query the subgroups of a parent group, specify this parameter.
     *
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

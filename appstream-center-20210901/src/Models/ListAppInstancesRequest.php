<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListAppInstancesRequest extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     *
     * @example aig-4p5f8tj16yb8b****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the application instance.
     *
     * @example ai-azn3kmwruh1vl****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The IDs of the application instances. Up to 100 IDs can be specified.
     *
     * @var string[]
     */
    public $appInstanceIdList;

    /**
     * @description Specifies whether to query the information about deleted app instances. If you set this parameter to true, you must configure AppInstanceIdList. Otherwise, a parameter error is reported.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $includeDeleted;

    /**
     * @description The page number. Default value: `1`. We recommend that you specify this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The value cannot be greater than `100`. Default value: `20`. We recommend that you specify this parameter.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the application instances.
     *
     * @var string[]
     */
    public $status;

    /**
     * @description The user IDs. You can specify up to 100 IDs.
     *
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstanceIdList' => 'AppInstanceIdList',
        'includeDeleted' => 'IncludeDeleted',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'userIdList' => 'UserIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appInstanceIdList) {
            $res['AppInstanceIdList'] = $this->appInstanceIdList;
        }
        if (null !== $this->includeDeleted) {
            $res['IncludeDeleted'] = $this->includeDeleted;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppInstanceIdList'])) {
            if (!empty($map['AppInstanceIdList'])) {
                $model->appInstanceIdList = $map['AppInstanceIdList'];
            }
        }
        if (isset($map['IncludeDeleted'])) {
            $model->includeDeleted = $map['IncludeDeleted'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}

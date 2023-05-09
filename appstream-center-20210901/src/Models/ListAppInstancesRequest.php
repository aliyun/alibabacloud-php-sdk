<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListAppInstancesRequest extends Model
{
    /**
     * @example aig-4p5f8tj16yb8b****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-azn3kmwruh1vl****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string[]
     */
    public $appInstanceIdList;

    /**
     * @var bool
     */
    public $includeDeleted;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'appInstanceIdList'  => 'AppInstanceIdList',
        'includeDeleted'     => 'IncludeDeleted',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}

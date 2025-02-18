<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListAppInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;
    /**
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
     * @var int
     */
    public $pageNumber;
    /**
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
        if (\is_array($this->appInstanceIdList)) {
            Model::validateArray($this->appInstanceIdList);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appInstanceIdList) {
            if (\is_array($this->appInstanceIdList)) {
                $res['AppInstanceIdList'] = [];
                $n1                       = 0;
                foreach ($this->appInstanceIdList as $item1) {
                    $res['AppInstanceIdList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1            = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->appInstanceIdList = [];
                $n1                       = 0;
                foreach ($map['AppInstanceIdList'] as $item1) {
                    $model->appInstanceIdList[$n1++] = $item1;
                }
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
                $model->status = [];
                $n1            = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupsRequest extends Model
{
    /**
     * @example ENTERPRISE
     *
     * @var string
     */
    public $bizType;

    /**
     * @example ug-12341234****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example co-0esnf80jab***
     *
     * @var string
     */
    public $solutionId;

    /**
     * @var bool
     */
    public $transferFileNeedApproval;
    protected $_name = [
        'bizType' => 'BizType',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'solutionId' => 'SolutionId',
        'transferFileNeedApproval' => 'TransferFileNeedApproval',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->transferFileNeedApproval) {
            $res['TransferFileNeedApproval'] = $this->transferFileNeedApproval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['TransferFileNeedApproval'])) {
            $model->transferFileNeedApproval = $map['TransferFileNeedApproval'];
        }

        return $model;
    }
}

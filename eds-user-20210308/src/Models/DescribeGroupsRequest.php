<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

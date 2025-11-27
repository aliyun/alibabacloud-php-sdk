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
     * @var bool
     */
    public $excludeAttachedLoginPolicyGroups;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $idpId;

    /**
     * @var string
     */
    public $loginPolicyId;

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
        'excludeAttachedLoginPolicyGroups' => 'ExcludeAttachedLoginPolicyGroups',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'idpId' => 'IdpId',
        'loginPolicyId' => 'LoginPolicyId',
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

        if (null !== $this->excludeAttachedLoginPolicyGroups) {
            $res['ExcludeAttachedLoginPolicyGroups'] = $this->excludeAttachedLoginPolicyGroups;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }

        if (null !== $this->loginPolicyId) {
            $res['LoginPolicyId'] = $this->loginPolicyId;
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

        if (isset($map['ExcludeAttachedLoginPolicyGroups'])) {
            $model->excludeAttachedLoginPolicyGroups = $map['ExcludeAttachedLoginPolicyGroups'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }

        if (isset($map['LoginPolicyId'])) {
            $model->loginPolicyId = $map['LoginPolicyId'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class enrolledAccounts extends Model
{
    /**
     * @description The account ID.
     *
     * @example 19534534552*****
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description The baseline ID.
     *
     * @example afb-bp1durvn3lgqe28v****
     *
     * @var string
     */
    public $baselineId;

    /**
     * @description The time at which the account was created.
     *
     * @example 2021-11-01T02:38:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The display name of the account.
     *
     * @example TestAccount
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the parent folder.
     *
     * @example fd-5ESoku****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The ID of the billing account.
     *
     * @example 13161210500*****
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description The creation status of the account. Valid values:
     *
     *   Pending: The account is waiting to be created.
     *   Running: The account is being created.
     *   Finished: The account is created.
     *   Failed: The account failed to be created.
     *   Scheduling: The account is being scheduled.
     *   ScheduleFailed: The account failed to be scheduled.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the information about the account was updated.
     *
     * @example 2021-11-01T02:38:27Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accountUid'      => 'AccountUid',
        'baselineId'      => 'BaselineId',
        'createTime'      => 'CreateTime',
        'displayName'     => 'DisplayName',
        'folderId'        => 'FolderId',
        'payerAccountUid' => 'PayerAccountUid',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enrolledAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['PayerAccountUid'])) {
            $model->payerAccountUid = $map['PayerAccountUid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

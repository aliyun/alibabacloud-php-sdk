<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\baselineItems;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\errorInfo;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\progress;
use AlibabaCloud\Tea\Model;

class GetEnrolledAccountResponseBody extends Model
{
    /**
     * @description The account ID.
     *
     * @example 12868156179*****
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description The ID of the baseline that was applied to the account.
     *
     * @example afb-bp1adadfadsf***
     *
     * @var string
     */
    public $baselineId;

    /**
     * @var baselineItems[]
     */
    public $baselineItems;

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
     * @example test-account
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The error message returned.
     *
     * @var errorInfo
     */
    public $errorInfo;

    /**
     * @description The ID of the parent folder.
     *
     * @example fd-5ESoku****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description Indicates whether the account was initialized.
     *
     * @example true
     *
     * @var bool
     */
    public $initialized;

    /**
     * @description The input parameters that are used when you enrolled the account.
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description The ID of the master account to which the account belongs.
     *
     * @example 19534534552*****
     *
     * @var int
     */
    public $masterAccountUid;

    /**
     * @description The ID of the billing account.
     *
     * @example 19534534552*****
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description The progress of applying the account baseline to the account.
     *
     * @var progress[]
     */
    public $progress;

    /**
     * @description The request ID.
     *
     * @example 768F908D-A66A-5A5D-816C-20C93CBBFEE3
     *
     * @var string
     */
    public $requestId;

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
     * @example Finished
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
        'accountUid'       => 'AccountUid',
        'baselineId'       => 'BaselineId',
        'baselineItems'    => 'BaselineItems',
        'createTime'       => 'CreateTime',
        'displayName'      => 'DisplayName',
        'errorInfo'        => 'ErrorInfo',
        'folderId'         => 'FolderId',
        'initialized'      => 'Initialized',
        'inputs'           => 'Inputs',
        'masterAccountUid' => 'MasterAccountUid',
        'payerAccountUid'  => 'PayerAccountUid',
        'progress'         => 'Progress',
        'requestId'        => 'RequestId',
        'status'           => 'Status',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = null !== $this->errorInfo ? $this->errorInfo->toMap() : null;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->initialized) {
            $res['Initialized'] = $this->initialized;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toMap() : null;
        }
        if (null !== $this->masterAccountUid) {
            $res['MasterAccountUid'] = $this->masterAccountUid;
        }
        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }
        if (null !== $this->progress) {
            $res['Progress'] = [];
            if (null !== $this->progress && \is_array($this->progress)) {
                $n = 0;
                foreach ($this->progress as $item) {
                    $res['Progress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetEnrolledAccountResponseBody
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
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = errorInfo::fromMap($map['ErrorInfo']);
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['Initialized'])) {
            $model->initialized = $map['Initialized'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }
        if (isset($map['MasterAccountUid'])) {
            $model->masterAccountUid = $map['MasterAccountUid'];
        }
        if (isset($map['PayerAccountUid'])) {
            $model->payerAccountUid = $map['PayerAccountUid'];
        }
        if (isset($map['Progress'])) {
            if (!empty($map['Progress'])) {
                $model->progress = [];
                $n               = 0;
                foreach ($map['Progress'] as $item) {
                    $model->progress[$n++] = null !== $item ? progress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\baselineItems;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\errorInfo;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\progress;

class GetEnrolledAccountResponseBody extends Model
{
    /**
     * @var int
     */
    public $accountUid;

    /**
     * @var string
     */
    public $baselineId;

    /**
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var errorInfo
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var bool
     */
    public $initialized;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @var int
     */
    public $masterAccountUid;

    /**
     * @var int
     */
    public $payerAccountUid;

    /**
     * @var progress[]
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accountUid' => 'AccountUid',
        'baselineId' => 'BaselineId',
        'baselineItems' => 'BaselineItems',
        'createTime' => 'CreateTime',
        'displayName' => 'DisplayName',
        'errorInfo' => 'ErrorInfo',
        'folderId' => 'FolderId',
        'initialized' => 'Initialized',
        'inputs' => 'Inputs',
        'masterAccountUid' => 'MasterAccountUid',
        'payerAccountUid' => 'PayerAccountUid',
        'progress' => 'Progress',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItems)) {
            Model::validateArray($this->baselineItems);
        }
        if (null !== $this->errorInfo) {
            $this->errorInfo->validate();
        }
        if (null !== $this->inputs) {
            $this->inputs->validate();
        }
        if (\is_array($this->progress)) {
            Model::validateArray($this->progress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }

        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->baselineItems) {
            if (\is_array($this->baselineItems)) {
                $res['BaselineItems'] = [];
                $n1 = 0;
                foreach ($this->baselineItems as $item1) {
                    $res['BaselineItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['ErrorInfo'] = null !== $this->errorInfo ? $this->errorInfo->toArray($noStream) : $this->errorInfo;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->initialized) {
            $res['Initialized'] = $this->initialized;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->masterAccountUid) {
            $res['MasterAccountUid'] = $this->masterAccountUid;
        }

        if (null !== $this->payerAccountUid) {
            $res['PayerAccountUid'] = $this->payerAccountUid;
        }

        if (null !== $this->progress) {
            if (\is_array($this->progress)) {
                $res['Progress'] = [];
                $n1 = 0;
                foreach ($this->progress as $item1) {
                    $res['Progress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['BaselineItems'] as $item1) {
                    $model->baselineItems[$n1] = baselineItems::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Progress'] as $item1) {
                    $model->progress[$n1] = progress::fromMap($item1);
                    ++$n1;
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\errorInfo;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\inputs;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody\progress;
use AlibabaCloud\Tea\Model;

class GetEnrolledAccountResponseBody extends Model
{
    /**
     * @description 账号ID
     *
     * @var int
     */
    public $accountUid;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 账号显示名称
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 错误信息
     *
     * @var errorInfo
     */
    public $errorInfo;

    /**
     * @description 父资源夹ID
     *
     * @var string
     */
    public $folderId;

    /**
     * @description 是否初始化完成
     *
     * @var bool
     */
    public $initialized;

    /**
     * @description 注册账号时的输入参数
     *
     * @var inputs
     */
    public $inputs;

    /**
     * @description 所属的Master账号ID
     *
     * @var int
     */
    public $masterAccountUid;

    /**
     * @description 结算账号ID
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description 基线实施进度
     *
     * @var progress[]
     */
    public $progress;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 账号注册状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accountUid'       => 'AccountUid',
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

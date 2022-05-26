<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class enrolledAccounts extends Model
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
     * @description 父资源夹ID
     *
     * @var string
     */
    public $folderId;

    /**
     * @description 结算账号ID
     *
     * @var int
     */
    public $payerAccountUid;

    /**
     * @description 创建状态
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
        'accountUid'      => 'AccountUid',
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

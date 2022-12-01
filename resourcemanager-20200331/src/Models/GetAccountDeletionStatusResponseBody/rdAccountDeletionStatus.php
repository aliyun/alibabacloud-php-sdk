<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus\failReasonList;
use AlibabaCloud\Tea\Model;

class rdAccountDeletionStatus extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deletionTime;

    /**
     * @var string
     */
    public $deletionType;

    /**
     * @var failReasonList[]
     */
    public $failReasonList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'      => 'AccountId',
        'createTime'     => 'CreateTime',
        'deletionTime'   => 'DeletionTime',
        'deletionType'   => 'DeletionType',
        'failReasonList' => 'FailReasonList',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletionTime) {
            $res['DeletionTime'] = $this->deletionTime;
        }
        if (null !== $this->deletionType) {
            $res['DeletionType'] = $this->deletionType;
        }
        if (null !== $this->failReasonList) {
            $res['FailReasonList'] = [];
            if (null !== $this->failReasonList && \is_array($this->failReasonList)) {
                $n = 0;
                foreach ($this->failReasonList as $item) {
                    $res['FailReasonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdAccountDeletionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionTime'])) {
            $model->deletionTime = $map['DeletionTime'];
        }
        if (isset($map['DeletionType'])) {
            $model->deletionType = $map['DeletionType'];
        }
        if (isset($map['FailReasonList'])) {
            if (!empty($map['FailReasonList'])) {
                $model->failReasonList = [];
                $n                     = 0;
                foreach ($map['FailReasonList'] as $item) {
                    $model->failReasonList[$n++] = null !== $item ? failReasonList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

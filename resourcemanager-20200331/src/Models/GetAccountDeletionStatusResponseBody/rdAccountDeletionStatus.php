<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus\failReasonList;

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
        if (\is_array($this->failReasonList)) {
            Model::validateArray($this->failReasonList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->failReasonList)) {
                $res['FailReasonList'] = [];
                $n1                    = 0;
                foreach ($this->failReasonList as $item1) {
                    $res['FailReasonList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1                    = 0;
                foreach ($map['FailReasonList'] as $item1) {
                    $model->failReasonList[$n1++] = failReasonList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetAccountDeletionStatusResponseBody\rdAccountDeletionStatus\failReasonList;
use AlibabaCloud\Tea\Model;

class rdAccountDeletionStatus extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 169946124551****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The start time of the deletion.
     *
     * @example 2022-08-23T17:05:30+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The end time of the deletion.
     *
     * @example 2022-08-23T17:06:01+08:00
     *
     * @var string
     */
    public $deletionTime;

    /**
     * @description The type of the deletion. Valid values:
     *
     *   0: direct deletion. If the member does not have pay-as-you-go resources that are purchased within the previous 30 days, the system directly deletes the member.
     *   1: deletion with a silence period. If the member has pay-as-you-go resources that are purchased within the previous 30 days, the member enters a silence period of 45 days. The system starts to delete the member until the silence period ends. For more information about the silence period, see [What is the silence period for member deletion?](~~446079~~)
     *
     * @example 0
     *
     * @var string
     */
    public $deletionType;

    /**
     * @description The reasons why the member fails to be deleted.
     *
     * @var failReasonList[]
     */
    public $failReasonList;

    /**
     * @description The status. Valid values:
     *
     *   Success: The member is deleted.
     *   Checking: A deletion check is being performed for the member.
     *   Deleting: The member is being deleted.
     *   CheckFailed: The deletion check for the member fails.
     *   DeleteFailed: The member fails to be deleted.
     *
     * @example Success
     *
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

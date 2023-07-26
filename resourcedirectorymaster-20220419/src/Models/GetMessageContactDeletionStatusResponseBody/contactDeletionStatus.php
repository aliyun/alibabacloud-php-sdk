<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus\failReasonList;
use AlibabaCloud\Tea\Model;

class contactDeletionStatus extends Model
{
    /**
     * @description The ID of the contact.
     *
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @description The types of messages received by the contact.
     *
     * @var failReasonList[]
     */
    public $failReasonList;

    /**
     * @description The deletion status of the contact. Valid values:
     *
     *   Deleting
     *   Failed
     *
     * @example Deleting
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'contactId'      => 'ContactId',
        'failReasonList' => 'FailReasonList',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
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
     * @return contactDeletionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
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

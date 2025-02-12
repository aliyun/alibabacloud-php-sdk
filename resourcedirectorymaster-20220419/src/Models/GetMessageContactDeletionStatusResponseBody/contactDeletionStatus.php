<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus\failReasonList;

class contactDeletionStatus extends Model
{
    /**
     * @var string
     */
    public $contactId;
    /**
     * @var failReasonList[]
     */
    public $failReasonList;
    /**
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
        if (\is_array($this->failReasonList)) {
            Model::validateArray($this->failReasonList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
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

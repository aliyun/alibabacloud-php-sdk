<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\GetMessageContactDeletionStatusResponseBody\contactDeletionStatus;

use AlibabaCloud\Tea\Model;

class failReasonList extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 199796839435****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The types of messages received by the contact.
     *
     * @var string[]
     */
    public $messageTypes;
    protected $_name = [
        'accountId'    => 'AccountId',
        'messageTypes' => 'MessageTypes',
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
        if (null !== $this->messageTypes) {
            $res['MessageTypes'] = $this->messageTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failReasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['MessageTypes'])) {
            if (!empty($map['MessageTypes'])) {
                $model->messageTypes = $map['MessageTypes'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountRequest extends Model
{
    /**
     * @description The IDs of the check items that you can choose to ignore for the member deletion.
     *
     * You can obtain the IDs from the response of the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation.
     * @var string[]
     */
    public $abandonableCheckId;

    /**
     * @description The Alibaba Cloud account ID of the member that you want to delete.
     *
     * @example 169946124551****
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'abandonableCheckId' => 'AbandonableCheckId',
        'accountId'          => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonableCheckId) {
            $res['AbandonableCheckId'] = $this->abandonableCheckId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonableCheckId'])) {
            if (!empty($map['AbandonableCheckId'])) {
                $model->abandonableCheckId = $map['AbandonableCheckId'];
            }
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}

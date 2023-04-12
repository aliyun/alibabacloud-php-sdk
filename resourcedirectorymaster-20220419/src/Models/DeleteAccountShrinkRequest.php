<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountShrinkRequest extends Model
{
    /**
     * @description The IDs of the check items that you can choose to ignore for the member deletion.
     *
     * You can obtain the IDs from the response of the [GetAccountDeletionCheckResult](~~GetAccountDeletionCheckResult~~) operation.
     * @var string
     */
    public $abandonableCheckIdShrink;

    /**
     * @description The Alibaba Cloud account ID of the member that you want to delete.
     *
     * @example 169946124551****
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'abandonableCheckIdShrink' => 'AbandonableCheckId',
        'accountId'                => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonableCheckIdShrink) {
            $res['AbandonableCheckId'] = $this->abandonableCheckIdShrink;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccountShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonableCheckId'])) {
            $model->abandonableCheckIdShrink = $map['AbandonableCheckId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}

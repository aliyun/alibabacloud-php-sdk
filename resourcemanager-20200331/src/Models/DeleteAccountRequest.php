<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountRequest extends Model
{
    /**
     * @var string[]
     */
    public $abandonableCheckId;

    /**
     * @description The type of the deletion. Valid values:
     *
     *   0: direct deletion. If the member does not have pay-as-you-go resources that are purchased within the previous 30 days, the system directly deletes the member.
     *   1: deletion with a silence period. If the member has pay-as-you-go resources that are purchased within the previous 30 days, the member enters a silence period of 45 days. The system starts to delete the member until the silence period ends. For more information about the silence period, see [What is the silence period for member deletion?](~~446079~~)
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

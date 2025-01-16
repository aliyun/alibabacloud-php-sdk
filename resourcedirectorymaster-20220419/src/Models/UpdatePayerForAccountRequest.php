<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class UpdatePayerForAccountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 138660628348****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description This parameter is required.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $payerAccountId;
    protected $_name = [
        'accountId'      => 'AccountId',
        'payerAccountId' => 'PayerAccountId',
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
        if (null !== $this->payerAccountId) {
            $res['PayerAccountId'] = $this->payerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePayerForAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['PayerAccountId'])) {
            $model->payerAccountId = $map['PayerAccountId'];
        }

        return $model;
    }
}

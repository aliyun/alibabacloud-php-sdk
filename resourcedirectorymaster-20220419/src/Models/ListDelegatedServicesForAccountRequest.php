<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class ListDelegatedServicesForAccountRequest extends Model
{
    /**
     * @example 138660628348****
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'accountId' => 'AccountId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDelegatedServicesForAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}

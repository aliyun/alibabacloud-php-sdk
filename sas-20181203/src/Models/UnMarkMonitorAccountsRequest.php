<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UnMarkMonitorAccountsRequest extends Model
{
    /**
     * @example 125267953644XXXX,125807832682XXXX
     *
     * @var string
     */
    public $accountIds;
    protected $_name = [
        'accountIds' => 'AccountIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnMarkMonitorAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class MarkMonitorAccountsRequest extends Model
{
    /**
     * @description The IDs of the members.
     *
     * This parameter is required.
     * @example 131331822340XXXX,140649175187XXXX
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
     * @return MarkMonitorAccountsRequest
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

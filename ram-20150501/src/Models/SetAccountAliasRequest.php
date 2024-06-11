<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetAccountAliasRequest extends Model
{
    /**
     * @description The alias of the Alibaba Cloud account.
     *
     * > It cannot start or end with a hyphen (-), and cannot contain consecutive hyphens (-).
     * @example myalias
     *
     * @var string
     */
    public $accountAlias;
    protected $_name = [
        'accountAlias' => 'AccountAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountAlias) {
            $res['AccountAlias'] = $this->accountAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAccountAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountAlias'])) {
            $model->accountAlias = $map['AccountAlias'];
        }

        return $model;
    }
}

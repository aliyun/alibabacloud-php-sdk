<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class accountTypeList extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountTypeDesc;
    protected $_name = [
        'accountType'     => 'AccountType',
        'accountTypeDesc' => 'AccountTypeDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountTypeDesc) {
            $res['AccountTypeDesc'] = $this->accountTypeDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountTypeDesc'])) {
            $model->accountTypeDesc = $map['AccountTypeDesc'];
        }

        return $model;
    }
}

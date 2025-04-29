<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TBAccountInfoQueryResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $tbAccount;

    /**
     * @var bool
     */
    public $tbBond;
    protected $_name = [
        'tbAccount' => 'tb_account',
        'tbBond' => 'tb_bond',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tbAccount) {
            $res['tb_account'] = $this->tbAccount;
        }

        if (null !== $this->tbBond) {
            $res['tb_bond'] = $this->tbBond;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tb_account'])) {
            $model->tbAccount = $map['tb_account'];
        }

        if (isset($map['tb_bond'])) {
            $model->tbBond = $map['tb_bond'];
        }

        return $model;
    }
}

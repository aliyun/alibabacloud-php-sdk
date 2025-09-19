<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetAttackPathWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $attackPathWhitelistId;
    protected $_name = [
        'attackPathWhitelistId' => 'AttackPathWhitelistId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathWhitelistId) {
            $res['AttackPathWhitelistId'] = $this->attackPathWhitelistId;
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
        if (isset($map['AttackPathWhitelistId'])) {
            $model->attackPathWhitelistId = $map['AttackPathWhitelistId'];
        }

        return $model;
    }
}

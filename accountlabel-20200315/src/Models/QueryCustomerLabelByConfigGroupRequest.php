<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountLabel\V20200315\Models;

use AlibabaCloud\Dara\Model;

class QueryCustomerLabelByConfigGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $PK;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'groupType' => 'GroupType',
        'PK' => 'PK',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

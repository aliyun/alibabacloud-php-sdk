<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListKgEntityRequest\listQuery;

use AlibabaCloud\Dara\Model;

class filterList extends Model
{
    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $propertyCode;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'op' => 'Op',
        'propertyCode' => 'PropertyCode',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }

        if (null !== $this->propertyCode) {
            $res['PropertyCode'] = $this->propertyCode;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }

        if (isset($map['PropertyCode'])) {
            $model->propertyCode = $map['PropertyCode'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

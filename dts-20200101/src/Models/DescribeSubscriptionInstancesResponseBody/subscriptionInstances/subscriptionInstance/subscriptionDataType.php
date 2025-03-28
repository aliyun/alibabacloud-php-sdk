<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;

use AlibabaCloud\Dara\Model;

class subscriptionDataType extends Model
{
    /**
     * @var bool
     */
    public $DDL;

    /**
     * @var bool
     */
    public $DML;
    protected $_name = [
        'DDL' => 'DDL',
        'DML' => 'DML',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDL) {
            $res['DDL'] = $this->DDL;
        }

        if (null !== $this->DML) {
            $res['DML'] = $this->DML;
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
        if (isset($map['DDL'])) {
            $model->DDL = $map['DDL'];
        }

        if (isset($map['DML'])) {
            $model->DML = $map['DML'];
        }

        return $model;
    }
}

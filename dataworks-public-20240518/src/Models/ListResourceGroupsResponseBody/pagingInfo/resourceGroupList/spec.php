<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList;

use AlibabaCloud\Dara\Model;

class spec extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var string
     */
    public $standard;
    protected $_name = [
        'amount'   => 'Amount',
        'standard' => 'Standard',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->standard) {
            $res['Standard'] = $this->standard;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['Standard'])) {
            $model->standard = $map['Standard'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class CreateWarmPoolInput extends Model
{
    /**
     * @var WarmPoolCapacityPolicyInput
     */
    public $capacityPolicy;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'capacityPolicy' => 'capacityPolicy',
        'templateID' => 'templateID',
    ];

    public function validate()
    {
        if (null !== $this->capacityPolicy) {
            $this->capacityPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityPolicy) {
            $res['capacityPolicy'] = null !== $this->capacityPolicy ? $this->capacityPolicy->toArray($noStream) : $this->capacityPolicy;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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
        if (isset($map['capacityPolicy'])) {
            $model->capacityPolicy = WarmPoolCapacityPolicyInput::fromMap($map['capacityPolicy']);
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        return $model;
    }
}

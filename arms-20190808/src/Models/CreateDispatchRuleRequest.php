<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateDispatchRuleRequest extends Model
{
    /**
     * @var string
     */
    public $dispatchRule;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dispatchRule' => 'DispatchRule',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = $this->dispatchRule;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = $map['DispatchRule'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

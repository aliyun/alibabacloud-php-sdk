<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;

class modifyDestinationInfo extends Model
{
    /**
     * @var bool
     */
    public $modifyDestination;
    protected $_name = [
        'modifyDestination' => 'modify_destination',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyDestination) {
            $res['modify_destination'] = $this->modifyDestination;
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
        if (isset($map['modify_destination'])) {
            $model->modifyDestination = $map['modify_destination'];
        }

        return $model;
    }
}

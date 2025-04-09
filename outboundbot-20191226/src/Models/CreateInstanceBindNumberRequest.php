<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceBindNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceList;

    /**
     * @var string
     */
    public $number;
    protected $_name = [
        'instanceList' => 'InstanceList',
        'number' => 'Number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}

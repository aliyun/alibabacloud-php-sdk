<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network;

use AlibabaCloud\Dara\Model;

class routes extends Model
{
    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'destination' => 'Destination',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\asyncInvokeConfig\destinationConfig;

use AlibabaCloud\Dara\Model;

class onSuccess extends Model
{
    /**
     * @var string
     */
    public $destination;
    protected $_name = [
        'destination' => 'destination',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
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
        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }

        return $model;
    }
}

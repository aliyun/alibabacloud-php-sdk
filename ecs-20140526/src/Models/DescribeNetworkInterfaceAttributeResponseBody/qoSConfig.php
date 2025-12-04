<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\qoSConfig\qoS;

class qoSConfig extends Model
{
    /**
     * @var bool
     */
    public $enableQoS;

    /**
     * @var qoS
     */
    public $qoS;
    protected $_name = [
        'enableQoS' => 'EnableQoS',
        'qoS' => 'QoS',
    ];

    public function validate()
    {
        if (null !== $this->qoS) {
            $this->qoS->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableQoS) {
            $res['EnableQoS'] = $this->enableQoS;
        }

        if (null !== $this->qoS) {
            $res['QoS'] = null !== $this->qoS ? $this->qoS->toArray($noStream) : $this->qoS;
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
        if (isset($map['EnableQoS'])) {
            $model->enableQoS = $map['EnableQoS'];
        }

        if (isset($map['QoS'])) {
            $model->qoS = qoS::fromMap($map['QoS']);
        }

        return $model;
    }
}

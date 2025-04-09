<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DeleteOutboundCallNumberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $outboundCallNumberId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'outboundCallNumberId' => 'OutboundCallNumberId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outboundCallNumberId) {
            $res['OutboundCallNumberId'] = $this->outboundCallNumberId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OutboundCallNumberId'])) {
            $model->outboundCallNumberId = $map['OutboundCallNumberId'];
        }

        return $model;
    }
}

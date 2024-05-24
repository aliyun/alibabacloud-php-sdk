<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineTriggerEventSpec extends Model
{
    /**
     * @var EventPayload
     */
    public $payload;

    /**
     * @var string
     */
    public $triggerName;
    protected $_name = [
        'payload'     => 'payload',
        'triggerName' => 'triggerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->triggerName) {
            $res['triggerName'] = $this->triggerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineTriggerEventSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['payload'])) {
            $model->payload = EventPayload::fromMap($map['payload']);
        }
        if (isset($map['triggerName'])) {
            $model->triggerName = $map['triggerName'];
        }

        return $model;
    }
}

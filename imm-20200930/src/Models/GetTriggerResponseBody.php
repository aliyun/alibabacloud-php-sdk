<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetTriggerResponseBody extends Model
{
    /**
     * @example 4A7A2D0E-D8B8-4DA0-8127-EB32C6******
     *
     * @var string
     */
    public $requestId;

    /**
     * @var DataIngestion
     */
    public $trigger;
    protected $_name = [
        'requestId' => 'RequestId',
        'trigger'   => 'Trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = DataIngestion::fromMap($map['Trigger']);
        }

        return $model;
    }
}

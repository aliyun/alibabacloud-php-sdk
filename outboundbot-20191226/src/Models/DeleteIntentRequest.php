<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteIntentRequest extends Model
{
    /**
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example c21fb0ec-fb5e-476f-a6bf-81a892739c8d
     *
     * @var string
     */
    public $intentId;

    /**
     * @example aa279896-64a6-4182-864c-4f2b04ec8d17
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'intentId'   => 'IntentId',
        'scriptId'   => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIntentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}

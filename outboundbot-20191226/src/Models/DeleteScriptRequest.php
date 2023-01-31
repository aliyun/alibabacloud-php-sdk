<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteScriptRequest extends Model
{
    /**
     * @example b3d5ac22-9643-49c6-aa84-777f6656f9f5
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 5c589560-6b9d-4415-a3e0-049c4ff05f56
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId' => 'InstanceId',
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}

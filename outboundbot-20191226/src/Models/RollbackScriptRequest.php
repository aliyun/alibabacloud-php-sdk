<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class RollbackScriptRequest extends Model
{
    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1579055782000
     *
     * @var string
     */
    public $rollbackVersion;

    /**
     * @example 303523b1-0094-4ebe-b9ed-c23d11c91d61
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'rollbackVersion' => 'RollbackVersion',
        'scriptId'        => 'ScriptId',
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
        if (null !== $this->rollbackVersion) {
            $res['RollbackVersion'] = $this->rollbackVersion;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RollbackVersion'])) {
            $model->rollbackVersion = $map['RollbackVersion'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}

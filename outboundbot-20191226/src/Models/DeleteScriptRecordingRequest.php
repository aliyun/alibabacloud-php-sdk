<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteScriptRecordingRequest extends Model
{
    /**
     * @example 1eefcb81-cd58-4143-8180-6a962d79d708
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example dcc42f0d-cfd8-4866-9bbf-002042503745
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example [
     * ]
     * @var string
     */
    public $uuidsJson;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId'   => 'ScriptId',
        'uuidsJson'  => 'UuidsJson',
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
        if (null !== $this->uuidsJson) {
            $res['UuidsJson'] = $this->uuidsJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScriptRecordingRequest
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
        if (isset($map['UuidsJson'])) {
            $model->uuidsJson = $map['UuidsJson'];
        }

        return $model;
    }
}

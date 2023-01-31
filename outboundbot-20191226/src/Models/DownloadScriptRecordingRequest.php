<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DownloadScriptRecordingRequest extends Model
{
    /**
     * @example b3865dc3-40fa-4afd-9fe4-dc7cda305a24
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example aa279896-64a6-4182-864c-4f2b04ec8d17
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 5feaab8a-97fd-4720-8108-79e017f2d3ac
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId'   => 'ScriptId',
        'uuid'       => 'Uuid',
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadScriptRecordingRequest
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}

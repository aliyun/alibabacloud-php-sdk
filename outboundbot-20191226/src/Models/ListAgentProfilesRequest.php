<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListAgentProfilesRequest extends Model
{
    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;

    /**
     * @description This parameter is required.
     *
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'appIp' => 'AppIp',
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
        }
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
     * @return ListAgentProfilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}

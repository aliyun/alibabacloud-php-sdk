<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListAgentProfilesRequest extends Model
{
    /**
     * @var string
     */
    public $appIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'appIp' => 'AppIp',
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

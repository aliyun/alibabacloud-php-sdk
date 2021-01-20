<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitoringAgentProcessRequest extends Model
{
    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $processUser;
    protected $_name = [
        'processName' => 'ProcessName',
        'instanceId'  => 'InstanceId',
        'processUser' => 'ProcessUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }

        return $model;
    }
}

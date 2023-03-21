<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class InstallCloudMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $agentAccessKey;

    /**
     * @var string
     */
    public $agentSecretKey;

    /**
     * @var string
     */
    public $argusVersion;

    /**
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'agentAccessKey' => 'AgentAccessKey',
        'agentSecretKey' => 'AgentSecretKey',
        'argusVersion'   => 'ArgusVersion',
        'instanceIdList' => 'InstanceIdList',
        'uuidList'       => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentAccessKey) {
            $res['AgentAccessKey'] = $this->agentAccessKey;
        }
        if (null !== $this->agentSecretKey) {
            $res['AgentSecretKey'] = $this->agentSecretKey;
        }
        if (null !== $this->argusVersion) {
            $res['ArgusVersion'] = $this->argusVersion;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallCloudMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentAccessKey'])) {
            $model->agentAccessKey = $map['AgentAccessKey'];
        }
        if (isset($map['AgentSecretKey'])) {
            $model->agentSecretKey = $map['AgentSecretKey'];
        }
        if (isset($map['ArgusVersion'])) {
            $model->argusVersion = $map['ArgusVersion'];
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}

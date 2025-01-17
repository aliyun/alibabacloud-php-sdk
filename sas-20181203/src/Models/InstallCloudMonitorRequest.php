<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceIdList)) {
                $res['InstanceIdList'] = [];
                $n1                    = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['InstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1              = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1++] = $item1;
                }
            }
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
                $model->instanceIdList = [];
                $n1                    = 0;
                foreach ($map['InstanceIdList'] as $item1) {
                    $model->instanceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1              = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class BindAgentStorage2VpcRequest extends Model
{
    /**
     * @var string
     */
    public $agentStorageName;

    /**
     * @var string
     */
    public $agentStorageVpcName;

    /**
     * @var string
     */
    public $virtualSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentStorageName' => 'AgentStorageName',
        'agentStorageVpcName' => 'AgentStorageVpcName',
        'virtualSwitchId' => 'VirtualSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStorageName) {
            $res['AgentStorageName'] = $this->agentStorageName;
        }

        if (null !== $this->agentStorageVpcName) {
            $res['AgentStorageVpcName'] = $this->agentStorageVpcName;
        }

        if (null !== $this->virtualSwitchId) {
            $res['VirtualSwitchId'] = $this->virtualSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AgentStorageName'])) {
            $model->agentStorageName = $map['AgentStorageName'];
        }

        if (isset($map['AgentStorageVpcName'])) {
            $model->agentStorageVpcName = $map['AgentStorageVpcName'];
        }

        if (isset($map['VirtualSwitchId'])) {
            $model->virtualSwitchId = $map['VirtualSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}

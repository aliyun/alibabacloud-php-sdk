<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class UnbindAgentStorage2VpcRequest extends Model
{
    /**
     * @var string
     */
    public $agentStorageName;

    /**
     * @var string
     */
    public $agentStorageVpcName;
    protected $_name = [
        'agentStorageName' => 'AgentStorageName',
        'agentStorageVpcName' => 'AgentStorageVpcName',
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

        return $model;
    }
}

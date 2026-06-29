<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class GetAgentStorageRequest extends Model
{
    /**
     * @var string
     */
    public $agentStorageName;
    protected $_name = [
        'agentStorageName' => 'AgentStorageName',
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

        return $model;
    }
}

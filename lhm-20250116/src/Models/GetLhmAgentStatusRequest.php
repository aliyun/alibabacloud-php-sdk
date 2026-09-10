<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class GetLhmAgentStatusRequest extends Model
{
    /**
     * @var int
     */
    public $agentType;

    /**
     * @var string
     */
    public $skillName;
    protected $_name = [
        'agentType' => 'agentType',
        'skillName' => 'skillName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['agentType'] = $this->agentType;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
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
        if (isset($map['agentType'])) {
            $model->agentType = $map['agentType'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        return $model;
    }
}

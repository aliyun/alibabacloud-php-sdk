<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetToolCallDistributionResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $callCount;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'callCount' => 'CallCount',
        'toolName' => 'ToolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
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
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        return $model;
    }
}

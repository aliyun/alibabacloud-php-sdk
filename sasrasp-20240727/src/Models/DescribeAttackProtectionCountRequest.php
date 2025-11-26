<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Dara\Model;

class DescribeAttackProtectionCountRequest extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'agentType' => 'AgentType',
        'endTimestamp' => 'EndTimestamp',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}

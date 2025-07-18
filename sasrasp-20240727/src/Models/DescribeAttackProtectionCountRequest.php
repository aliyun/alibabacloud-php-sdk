<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttackProtectionCountRequest extends Model
{
    /**
     * @example sas
     *
     * @var string
     */
    public $agentType;

    /**
     * @description This parameter is required.
     *
     * @example 1767456000000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description This parameter is required.
     *
     * @example 1739289981765
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'agentType' => 'AgentType',
        'endTimestamp' => 'EndTimestamp',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeAttackProtectionCountRequest
     */
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

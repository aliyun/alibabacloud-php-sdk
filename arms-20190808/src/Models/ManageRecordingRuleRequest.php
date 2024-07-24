<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ManageRecordingRuleRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example cf09705f5a82f454db0d50420b6b4e904
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the user.
     *
     * This parameter is required.
     * @example 87348589207
     *
     * @var string
     */
    public $queryUserId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The recording rule.
     *
     * This parameter is required.
     * @example groups:\\n- interval: 60s\\n  name: auto_analyzer_recording_rule_60s\\n  rules:\\n  - expr: sum(node_cpu_seconds_total)\\n    record: sum:node_cpu_seconds_total:recording_rule_hash_f341458c0f7d\\n
     *
     * @var string
     */
    public $ruleYaml;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'queryUserId' => 'QueryUserId',
        'regionId'    => 'RegionId',
        'ruleYaml'    => 'RuleYaml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->queryUserId) {
            $res['QueryUserId'] = $this->queryUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleYaml) {
            $res['RuleYaml'] = $this->ruleYaml;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManageRecordingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueryUserId'])) {
            $model->queryUserId = $map['QueryUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleYaml'])) {
            $model->ruleYaml = $map['RuleYaml'];
        }

        return $model;
    }
}

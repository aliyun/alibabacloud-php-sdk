<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddRecordingRuleRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The custom recording rule. The value is in the YAML format.
     *
     * @example groups: - name: "recording_demo"   rules:   - expr: "sum(jvm_memory_max_bytes)"     record: "rate_coredns_demo"
     *
     * @var string
     */
    public $ruleYaml;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId'  => 'RegionId',
        'ruleYaml'  => 'RuleYaml',
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
     * @return AddRecordingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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

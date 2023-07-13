<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DisableMetricRulesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @example detect_87****_HTTP_HttpLatency
     *
     * @var string[]
     */
    public $ruleId;
    protected $_name = [
        'regionId' => 'RegionId',
        'ruleId'   => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableMetricRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            if (!empty($map['RuleId'])) {
                $model->ruleId = $map['RuleId'];
            }
        }

        return $model;
    }
}

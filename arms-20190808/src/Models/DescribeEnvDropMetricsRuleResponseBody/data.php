<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvDropMetricsRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example kube_pod_created
     *
     * @var string
     */
    public $dropMetrics;

    /**
     * @example ruleName1
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'dropMetrics' => 'DropMetrics',
        'ruleName' => 'RuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dropMetrics) {
            $res['DropMetrics'] = $this->dropMetrics;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DropMetrics'])) {
            $model->dropMetrics = $map['DropMetrics'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}

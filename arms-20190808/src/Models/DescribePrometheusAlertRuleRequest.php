<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribePrometheusAlertRuleRequest extends Model
{
    /**
     * @description The ID of the alert rule. You can call the ListPrometheusAlertRules operation to query the ID of the alert rule.
     *
     * @example 3888704
     *
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'alertId'   => 'AlertId',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrometheusAlertRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

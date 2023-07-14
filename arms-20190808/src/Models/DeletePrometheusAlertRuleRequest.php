<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeletePrometheusAlertRuleRequest extends Model
{
    /**
     * @description Indicates whether the alert rule was deleted. Valid values:
     *
     *   `true`: The alert rule was deleted.
     *   `false`: The alert rule failed to be deleted.
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
     * @return DeletePrometheusAlertRuleRequest
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

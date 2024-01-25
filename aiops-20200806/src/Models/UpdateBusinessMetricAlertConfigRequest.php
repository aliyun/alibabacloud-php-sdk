<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessMetricAlertConfigRequest extends Model
{
    /**
     * @var int
     */
    public $alertConfigId;

    /**
     * @var string
     */
    public $configs;

    /**
     * @var int
     */
    public $metricId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'alertConfigId' => 'AlertConfigId',
        'configs'       => 'Configs',
        'metricId'      => 'MetricId',
        'operaUid'      => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfigId) {
            $res['AlertConfigId'] = $this->alertConfigId;
        }
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBusinessMetricAlertConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfigId'])) {
            $model->alertConfigId = $map['AlertConfigId'];
        }
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}

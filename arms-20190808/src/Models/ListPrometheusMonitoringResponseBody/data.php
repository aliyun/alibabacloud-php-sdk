<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusMonitoringResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configYaml;

    /**
     * @var string
     */
    public $monitoringName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'configYaml' => 'ConfigYaml',
        'monitoringName' => 'MonitoringName',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }

        if (null !== $this->monitoringName) {
            $res['MonitoringName'] = $this->monitoringName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }

        if (isset($map['MonitoringName'])) {
            $model->monitoringName = $map['MonitoringName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

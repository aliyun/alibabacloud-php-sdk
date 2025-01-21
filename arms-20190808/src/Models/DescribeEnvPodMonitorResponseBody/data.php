<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvPodMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $configYaml;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $podMonitorName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configYaml'     => 'ConfigYaml',
        'environmentId'  => 'EnvironmentId',
        'namespace'      => 'Namespace',
        'podMonitorName' => 'PodMonitorName',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->podMonitorName) {
            $res['PodMonitorName'] = $this->podMonitorName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PodMonitorName'])) {
            $model->podMonitorName = $map['PodMonitorName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

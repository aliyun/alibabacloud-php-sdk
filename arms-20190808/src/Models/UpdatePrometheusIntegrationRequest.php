<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdatePrometheusIntegrationRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var string
     */
    public $integrationType;
    /**
     * @var string
     */
    public $param;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'instanceId'      => 'InstanceId',
        'integrationType' => 'IntegrationType',
        'param'           => 'Param',
        'regionId'        => 'RegionId',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

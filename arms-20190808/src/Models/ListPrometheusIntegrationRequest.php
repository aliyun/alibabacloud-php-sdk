<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusIntegrationRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance. Only aliyun-cs and ecs instances are supported.
     *
     * This parameter is required.
     * @example c77f6f2397ea74672872acf5e31374a27
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The integration type.
     *
     * This parameter is required.
     * @example kafka, mysql, redis, snmp, emr, nubela, and tidb
     *
     * @var string
     */
    public $integrationType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'integrationType' => 'IntegrationType',
        'regionId'        => 'RegionId',
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
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusIntegrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

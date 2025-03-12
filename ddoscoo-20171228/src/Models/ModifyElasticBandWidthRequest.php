<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticBandWidthRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @description This parameter is required.
     *
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'elasticBandwidth' => 'ElasticBandwidth',
        'instanceId'       => 'InstanceId',
        'sourceIp'         => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticBandWidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

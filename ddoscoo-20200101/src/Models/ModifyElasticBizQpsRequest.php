<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyElasticBizQpsRequest extends Model
{
    /**
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example month
     *
     * @var string
     */
    public $mode;

    /**
     * @example 300000
     *
     * @var int
     */
    public $opsElasticQps;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'mode'          => 'Mode',
        'opsElasticQps' => 'OpsElasticQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->opsElasticQps) {
            $res['OpsElasticQps'] = $this->opsElasticQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyElasticBizQpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OpsElasticQps'])) {
            $model->opsElasticQps = $map['OpsElasticQps'];
        }

        return $model;
    }
}

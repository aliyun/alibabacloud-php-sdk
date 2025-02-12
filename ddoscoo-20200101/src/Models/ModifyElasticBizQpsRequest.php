<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyElasticBizQpsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $mode;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

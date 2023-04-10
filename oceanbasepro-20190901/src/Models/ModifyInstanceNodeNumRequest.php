<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceNodeNumRequest extends Model
{
    /**
     * @example ob3h8ytroxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 6
     *
     * @var string
     */
    public $nodeNum;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'nodeNum'    => 'NodeNum',
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
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceNodeNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceTemporaryCapacityRequest extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $diskSize;

    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example oceanbase.cluster.i2.small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'diskSize'   => 'DiskSize',
        'instanceId' => 'InstanceId',
        'spec'       => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceTemporaryCapacityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}

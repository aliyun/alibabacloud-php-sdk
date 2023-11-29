<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableSpecRequest extends Model
{
    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example oceanbase.cluster.cd8.xlarge
     *
     * @var string
     */
    public $spec;

    /**
     * @example upgradespec
     *
     * @var string
     */
    public $upgradeType;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'spec'        => 'Spec',
        'upgradeType' => 'UpgradeType',
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
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}

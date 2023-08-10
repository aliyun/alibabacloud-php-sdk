<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The ID of the source instance.
     *
     * @example rm-bp1162kryivb8****
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The type of the source instance.
     *
     * >  This parameter is returned only for change tracking instances of the new version.
     * @example RDS
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceID'   => 'InstanceID',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}

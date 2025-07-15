<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ChangeCloudPhoneNodeRequest extends Model
{
    /**
     * @example ac.max
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cpn-0ugbptfu473fy****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 20
     *
     * @var int
     */
    public $phoneCount;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'nodeId' => 'NodeId',
        'phoneCount' => 'PhoneCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCloudPhoneNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }

        return $model;
    }
}

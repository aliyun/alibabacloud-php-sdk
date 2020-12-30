<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig;

use AlibabaCloud\Tea\Model;

class instanceTypeList extends Model
{
    /**
     * @var string[]
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = $map['InstanceType'];
            }
        }

        return $model;
    }
}

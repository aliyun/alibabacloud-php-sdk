<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig;

use AlibabaCloud\Tea\Model;

class instanceTypeList extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypeList;
    protected $_name = [
        'instanceTypeList' => 'instanceTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeList) {
            $res['instanceTypeList'] = $this->instanceTypeList;
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
        if (isset($map['instanceTypeList'])) {
            if (!empty($map['instanceTypeList'])) {
                $model->instanceTypeList = $map['instanceTypeList'];
            }
        }

        return $model;
    }
}

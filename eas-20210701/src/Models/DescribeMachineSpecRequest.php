<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeMachineSpecRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @deprecated
     *
     * @var string[]
     */
    public $instanceTypes;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMachineSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }

        return $model;
    }
}

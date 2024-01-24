<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsRdsInstancesRequest extends Model
{
    /**
     * @description The ID of the PolarDB-X instance.
     *
     * > You can call the [DescribeDrdsInstances](~~139284~~) operation to query the information about instances in the specified account, such as the IDs of the instances.
     * @example drds*************
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsRdsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}

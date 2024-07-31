<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class DescribeAnycastServerRegionsRequest extends Model
{
    /**
     * @description The access area from which you use the Anycast EIP to communicate with the Internet.
     *
     * Set the value to **international**, which specifies the areas outside the Chinese mainland.
     *
     * This parameter is required.
     * @example international
     *
     * @var string
     */
    public $serviceLocation;
    protected $_name = [
        'serviceLocation' => 'ServiceLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastServerRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        return $model;
    }
}

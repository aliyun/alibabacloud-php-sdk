<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest;

use AlibabaCloud\Tea\Model;

class popLocations extends Model
{
    /**
     * @description The information about the access points in associated access areas when you associate an Anycast EIP with an endpoint.
     *
     * You can call the [DescribeAnycastPopLocations](~~171938~~) operation to query information about access points in supported access areas.
     * @example us-west-1-pop
     *
     * @var string
     */
    public $popLocation;
    protected $_name = [
        'popLocation' => 'PopLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->popLocation) {
            $res['PopLocation'] = $this->popLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return popLocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PopLocation'])) {
            $model->popLocation = $map['PopLocation'];
        }

        return $model;
    }
}

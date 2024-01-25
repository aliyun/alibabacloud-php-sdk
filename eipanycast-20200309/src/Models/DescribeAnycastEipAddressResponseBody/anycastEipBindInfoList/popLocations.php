<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList;

use AlibabaCloud\Tea\Model;

class popLocations extends Model
{
    /**
     * @description The information about the access points in associated access areas when you associate an Anycast EIP with a cloud resource.
     *
     * If this is your first time associating an Anycast EIP with an endpoint, the system returns information about access points in all access areas.
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

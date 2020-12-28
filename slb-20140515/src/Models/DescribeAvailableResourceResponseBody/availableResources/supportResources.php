<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources;

use AlibabaCloud\Tea\Model;

class supportResources extends Model
{
    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $addressType;
    protected $_name = [
        'addressIPVersion' => 'AddressIPVersion',
        'addressType'      => 'AddressType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        return $model;
    }
}

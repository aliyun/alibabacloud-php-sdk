<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $addressIPVersion;
    protected $_name = [
        'addressType'      => 'AddressType',
        'addressIPVersion' => 'AddressIPVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }

        return $model;
    }
}

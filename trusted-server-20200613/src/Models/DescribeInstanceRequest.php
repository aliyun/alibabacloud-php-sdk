<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $propertyUuid;
    protected $_name = [
        'propertyUuid' => 'PropertyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }

        return $model;
    }
}

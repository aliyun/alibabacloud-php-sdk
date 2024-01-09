<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeAvailableInstanceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'instanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceType'])) {
            if (!empty($map['instanceType'])) {
                $model->instanceType = $map['instanceType'];
            }
        }

        return $model;
    }
}

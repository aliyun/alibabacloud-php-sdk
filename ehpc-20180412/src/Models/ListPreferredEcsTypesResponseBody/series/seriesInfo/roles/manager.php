<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles;

use AlibabaCloud\Tea\Model;

class manager extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypeId;
    protected $_name = [
        'instanceTypeId' => 'InstanceTypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manager
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeId'])) {
            if (!empty($map['InstanceTypeId'])) {
                $model->instanceTypeId = $map['InstanceTypeId'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class serviceGroups extends Model
{
    /**
     * @description 服务组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'name'           => 'name',
        'serviceGroupId' => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class serviceGroups extends Model
{
    /**
     * @example 描述
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @example 123
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @example 服务组A
     *
     * @var string
     */
    public $serviceGroupName;
    protected $_name = [
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceGroupId'          => 'serviceGroupId',
        'serviceGroupName'        => 'serviceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
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
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }

        return $model;
    }
}

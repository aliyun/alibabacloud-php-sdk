<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponseBody\fileSystems;

use AlibabaCloud\Tea\Model;

class appInstanceGroups extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * @example aig-0bz55ibznu9p7****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The name of the delivery group.
     *
     * @example DemoDeliveryGroup
     *
     * @var string
     */
    public $appInstanceGroupName;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstanceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        return $model;
    }
}

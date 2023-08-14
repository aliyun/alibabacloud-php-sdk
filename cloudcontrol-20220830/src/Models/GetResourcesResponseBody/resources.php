<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example {"Status":"Available","Description":"","AccountPrivilege":"RoleReadWrite","InstanceId":"r-8vbf5abe31c9c4d4","RegionId":"cn-zhangjiakou","AccountType":"Normal","TypeInfo":{},"AccountName":"cctest"}
     *
     * @var mixed[]
     */
    public $resourceAttributes;

    /**
     * @example cctest
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'resourceAttributes' => 'resourceAttributes',
        'resourceId'         => 'resourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceAttributes) {
            $res['resourceAttributes'] = $this->resourceAttributes;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceAttributes'])) {
            $model->resourceAttributes = $map['resourceAttributes'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        return $model;
    }
}

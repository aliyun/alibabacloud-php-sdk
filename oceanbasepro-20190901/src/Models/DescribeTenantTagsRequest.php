<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeTenantTagsRequest extends Model
{
    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{"Key": "xxx", "Value", "xxx"},{}]
     *
     * @var string
     */
    public $tags;

    /**
     * @example ["xxx", "xxx"]
     *
     * @var string
     */
    public $tenantIds;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'tags'       => 'Tags',
        'tenantIds'  => 'TenantIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->tenantIds) {
            $res['TenantIds'] = $this->tenantIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TenantIds'])) {
            $model->tenantIds = $map['TenantIds'];
        }

        return $model;
    }
}

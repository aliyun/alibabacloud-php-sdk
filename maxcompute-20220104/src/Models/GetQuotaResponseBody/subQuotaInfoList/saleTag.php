<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody\subQuotaInfoList;

use AlibabaCloud\Tea\Model;

class saleTag extends Model
{
    /**
     * @description The identifier of an object in a MaxCompute quota. This identifier exists in the sales bill of Alibaba Cloud. You can use this identifier to associate the cost of a quota object with a tag.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the object. Valid values: quota and project.
     *
     * @example "quota"
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceIds' => 'resourceIds',
        'resourceType' => 'resourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['resourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceIds'])) {
            if (!empty($map['resourceIds'])) {
                $model->resourceIds = $map['resourceIds'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

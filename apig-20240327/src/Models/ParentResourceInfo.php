<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ParentResourceInfo extends Model
{
    /**
     * @var HttpApiApiInfo
     */
    public $apiInfo;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'apiInfo'      => 'apiInfo',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInfo) {
            $res['apiInfo'] = null !== $this->apiInfo ? $this->apiInfo->toMap() : null;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ParentResourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiInfo'])) {
            $model->apiInfo = HttpApiApiInfo::fromMap($map['apiInfo']);
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

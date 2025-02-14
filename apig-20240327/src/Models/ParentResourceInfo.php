<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->apiInfo) {
            $this->apiInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInfo) {
            $res['apiInfo'] = null !== $this->apiInfo ? $this->apiInfo->toArray($noStream) : $this->apiInfo;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

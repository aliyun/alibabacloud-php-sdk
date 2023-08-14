<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType;
use AlibabaCloud\Tea\Model;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceType
     */
    public $resourceType;
    protected $_name = [
        'requestId'    => 'requestId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = null !== $this->resourceType ? $this->resourceType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = resourceType::fromMap($map['resourceType']);
        }

        return $model;
    }
}

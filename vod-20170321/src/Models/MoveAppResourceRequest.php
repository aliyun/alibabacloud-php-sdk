<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class MoveAppResourceRequest extends Model
{
    /**
     * @var string
     */
    public $targetAppId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceIds;
    protected $_name = [
        'targetAppId'  => 'TargetAppId',
        'resourceType' => 'ResourceType',
        'resourceIds'  => 'ResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetAppId) {
            $res['TargetAppId'] = $this->targetAppId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAppResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetAppId'])) {
            $model->targetAppId = $map['TargetAppId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateVolumesResponseBody\volumeIds;
use AlibabaCloud\Tea\Model;

class CreateVolumesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var volumeIds
     */
    public $volumeIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'volumeIds' => 'VolumeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->volumeIds) {
            $res['VolumeIds'] = null !== $this->volumeIds ? $this->volumeIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVolumesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VolumeIds'])) {
            $model->volumeIds = volumeIds::fromMap($map['VolumeIds']);
        }

        return $model;
    }
}

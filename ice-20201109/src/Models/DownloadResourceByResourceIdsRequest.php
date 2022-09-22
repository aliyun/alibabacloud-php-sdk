<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DownloadResourceByResourceIdsRequest extends Model
{
    /**
     * @var string
     */
    public $resourceIds;
    protected $_name = [
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadResourceByResourceIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }

        return $model;
    }
}

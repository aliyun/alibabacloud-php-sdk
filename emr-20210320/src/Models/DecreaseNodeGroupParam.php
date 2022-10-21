<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DecreaseNodeGroupParam extends Model
{
    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string[]
     */
    public $releaseInstanceIds;
    protected $_name = [
        'nodeGroupId'        => 'NodeGroupId',
        'releaseInstanceIds' => 'ReleaseInstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->releaseInstanceIds) {
            $res['ReleaseInstanceIds'] = $this->releaseInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecreaseNodeGroupParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['ReleaseInstanceIds'])) {
            if (!empty($map['ReleaseInstanceIds'])) {
                $model->releaseInstanceIds = $map['ReleaseInstanceIds'];
            }
        }

        return $model;
    }
}

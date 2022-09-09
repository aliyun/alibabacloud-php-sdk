<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet;

use AlibabaCloud\Tea\Model;

class relationList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'createTime'   => 'createTime',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

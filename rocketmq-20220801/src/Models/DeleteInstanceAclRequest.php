<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceAclRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description This parameter is required.
     *
     * @example Topic
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}

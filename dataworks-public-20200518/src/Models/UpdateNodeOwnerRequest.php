<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeOwnerRequest extends Model
{
    /**
     * @description The ID of the node. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The environment where the node runs. Valid values: DEV and PROD. The value DEV indicates the development environment. The value PROD indicates the production environment.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The Alibaba Cloud account ID of the node owner. You can log on to the DataWorks console and move the pointer over the profile picture in the upper-right corner to view the ID.
     *
     * This parameter is required.
     * @example 19337906836551
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'nodeId'     => 'NodeId',
        'projectEnv' => 'ProjectEnv',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNodeOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

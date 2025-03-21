<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeGroupRequest extends Model
{
    /**
     * @example test-update
     *
     * @var string
     */
    public $newNodeGroupName;

    /**
     * @example i120021051733814190732
     *
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'newNodeGroupName' => 'NewNodeGroupName',
        'nodeGroupId' => 'NodeGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->newNodeGroupName) {
            $res['NewNodeGroupName'] = $this->newNodeGroupName;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewNodeGroupName'])) {
            $model->newNodeGroupName = $map['NewNodeGroupName'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        return $model;
    }
}

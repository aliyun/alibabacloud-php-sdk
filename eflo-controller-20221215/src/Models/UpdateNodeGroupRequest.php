<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class UpdateNodeGroupRequest extends Model
{
    /**
     * @var string
     */
    public $newNodeGroupName;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'newNodeGroupName' => 'NewNodeGroupName',
        'nodeGroupId' => 'NodeGroupId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newNodeGroupName) {
            $res['NewNodeGroupName'] = $this->newNodeGroupName;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['NewNodeGroupName'])) {
            $model->newNodeGroupName = $map['NewNodeGroupName'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudPhoneNodeRequest extends Model
{
    /**
     * @var string
     */
    public $newNodeName;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'newNodeName' => 'NewNodeName',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newNodeName) {
            $res['NewNodeName'] = $this->newNodeName;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['NewNodeName'])) {
            $model->newNodeName = $map['NewNodeName'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

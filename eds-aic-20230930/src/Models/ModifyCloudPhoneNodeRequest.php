<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudPhoneNodeRequest extends Model
{
    /**
     * @description The name that you want to assign to the cloud phone matrix.
     *
     * @example node_name_new
     *
     * @var string
     */
    public $newNodeName;

    /**
     * @description The ID of the cloud phone matrix.
     *
     * @example cpn-0ugbptfu473fy****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $streamMode;
    protected $_name = [
        'newNodeName' => 'NewNodeName',
        'nodeId' => 'NodeId',
        'streamMode' => 'StreamMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->newNodeName) {
            $res['NewNodeName'] = $this->newNodeName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->streamMode) {
            $res['StreamMode'] = $this->streamMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudPhoneNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewNodeName'])) {
            $model->newNodeName = $map['NewNodeName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StreamMode'])) {
            $model->streamMode = $map['StreamMode'];
        }

        return $model;
    }
}

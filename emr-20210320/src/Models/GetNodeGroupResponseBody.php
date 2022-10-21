<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetNodeGroupResponseBody extends Model
{
    /**
     * @var NodeGroup
     */
    public $nodeGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeGroup' => 'NodeGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeGroup) {
            $res['NodeGroup'] = null !== $this->nodeGroup ? $this->nodeGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeGroup'])) {
            $model->nodeGroup = NodeGroup::fromMap($map['NodeGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

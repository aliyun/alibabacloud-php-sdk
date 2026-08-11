<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class RefreshNodeGroupNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nodeGroupRefreshTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeGroupRefreshTaskId' => 'NodeGroupRefreshTaskId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeGroupRefreshTaskId) {
            $res['NodeGroupRefreshTaskId'] = $this->nodeGroupRefreshTaskId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NodeGroupRefreshTaskId'])) {
            $model->nodeGroupRefreshTaskId = $map['NodeGroupRefreshTaskId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

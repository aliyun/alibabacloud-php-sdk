<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterNodePoolResponseBody\nodepool;

class CreateClusterNodePoolResponseBody extends Model
{
    /**
     * @var nodepool
     */
    public $nodepool;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodepool' => 'Nodepool',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->nodepool) {
            $this->nodepool->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodepool) {
            $res['Nodepool'] = null !== $this->nodepool ? $this->nodepool->toArray($noStream) : $this->nodepool;
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
        if (isset($map['Nodepool'])) {
            $model->nodepool = nodepool::fromMap($map['Nodepool']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

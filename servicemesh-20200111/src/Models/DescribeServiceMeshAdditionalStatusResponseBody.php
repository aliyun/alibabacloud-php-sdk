<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;

class DescribeServiceMeshAdditionalStatusResponseBody extends Model
{
    /**
     * @var clusterStatus
     */
    public $clusterStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterStatus' => 'ClusterStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterStatus) {
            $this->clusterStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = null !== $this->clusterStatus ? $this->clusterStatus->toArray($noStream) : $this->clusterStatus;
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
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = clusterStatus::fromMap($map['ClusterStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

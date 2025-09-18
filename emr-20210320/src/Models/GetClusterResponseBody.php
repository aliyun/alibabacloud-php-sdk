<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class GetClusterResponseBody extends Model
{
    /**
     * @var Cluster
     */
    public $cluster;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cluster' => 'Cluster',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cluster) {
            $this->cluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toArray($noStream) : $this->cluster;
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
        if (isset($map['Cluster'])) {
            $model->cluster = Cluster::fromMap($map['Cluster']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

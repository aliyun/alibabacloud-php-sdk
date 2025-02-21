<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta;

class GetClusterCloneMetaResponseBody extends Model
{
    /**
     * @var clusterCloneMeta
     */
    public $clusterCloneMeta;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterCloneMeta' => 'ClusterCloneMeta',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterCloneMeta) {
            $this->clusterCloneMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterCloneMeta) {
            $res['ClusterCloneMeta'] = null !== $this->clusterCloneMeta ? $this->clusterCloneMeta->toArray($noStream) : $this->clusterCloneMeta;
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
        if (isset($map['ClusterCloneMeta'])) {
            $model->clusterCloneMeta = clusterCloneMeta::fromMap($map['ClusterCloneMeta']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

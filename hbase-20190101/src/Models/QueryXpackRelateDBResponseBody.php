<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryXpackRelateDBResponseBody\clusterList;

class QueryXpackRelateDBResponseBody extends Model
{
    /**
     * @var clusterList
     */
    public $clusterList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterList' => 'ClusterList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusterList) {
            $this->clusterList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterList) {
            $res['ClusterList'] = null !== $this->clusterList ? $this->clusterList->toArray($noStream) : $this->clusterList;
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
        if (isset($map['ClusterList'])) {
            $model->clusterList = clusterList::fromMap($map['ClusterList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

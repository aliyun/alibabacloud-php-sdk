<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody\clusters;
use AlibabaCloud\Tea\Model;

class DescribeClustersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clusters
     */
    public $clusters;
    protected $_name = [
        'requestId' => 'RequestId',
        'clusters'  => 'Clusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = null !== $this->clusters ? $this->clusters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Clusters'])) {
            $model->clusters = clusters::fromMap($map['Clusters']);
        }

        return $model;
    }
}

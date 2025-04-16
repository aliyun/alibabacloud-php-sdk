<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClustersResponseBody\clusters;

class DescribeClustersResponseBody extends Model
{
    /**
     * @var clusters
     */
    public $clusters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusters' => 'Clusters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->clusters) {
            $this->clusters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = null !== $this->clusters ? $this->clusters->toArray($noStream) : $this->clusters;
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
        if (isset($map['Clusters'])) {
            $model->clusters = clusters::fromMap($map['Clusters']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

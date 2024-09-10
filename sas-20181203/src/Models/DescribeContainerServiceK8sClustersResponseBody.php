<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClustersResponseBody\k8sClusters;
use AlibabaCloud\Tea\Model;

class DescribeContainerServiceK8sClustersResponseBody extends Model
{
    /**
     * @description The information about the clusters.
     *
     * @var k8sClusters[]
     */
    public $k8sClusters;

    /**
     * @description The request ID.
     *
     * @example 20456DD5-5CBF-5015-9173-12CA4246B***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sClusters' => 'K8sClusters',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusters) {
            $res['K8sClusters'] = [];
            if (null !== $this->k8sClusters && \is_array($this->k8sClusters)) {
                $n = 0;
                foreach ($this->k8sClusters as $item) {
                    $res['K8sClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerServiceK8sClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusters'])) {
            if (!empty($map['K8sClusters'])) {
                $model->k8sClusters = [];
                $n                  = 0;
                foreach ($map['K8sClusters'] as $item) {
                    $model->k8sClusters[$n++] = null !== $item ? k8sClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

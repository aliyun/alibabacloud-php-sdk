<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClustersResponseBody\k8sClusters;

class DescribeContainerServiceK8sClustersResponseBody extends Model
{
    /**
     * @var k8sClusters[]
     */
    public $k8sClusters;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sClusters' => 'K8sClusters',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->k8sClusters)) {
            Model::validateArray($this->k8sClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k8sClusters) {
            if (\is_array($this->k8sClusters)) {
                $res['K8sClusters'] = [];
                $n1                 = 0;
                foreach ($this->k8sClusters as $item1) {
                    $res['K8sClusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['K8sClusters'])) {
            if (!empty($map['K8sClusters'])) {
                $model->k8sClusters = [];
                $n1                 = 0;
                foreach ($map['K8sClusters'] as $item1) {
                    $model->k8sClusters[$n1++] = k8sClusters::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

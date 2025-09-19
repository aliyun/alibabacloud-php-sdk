<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterNamespacesResponseBody\k8sClusterNamespaces;

class DescribeContainerServiceK8sClusterNamespacesResponseBody extends Model
{
    /**
     * @var k8sClusterNamespaces[]
     */
    public $k8sClusterNamespaces;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'k8sClusterNamespaces' => 'K8sClusterNamespaces',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->k8sClusterNamespaces)) {
            Model::validateArray($this->k8sClusterNamespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k8sClusterNamespaces) {
            if (\is_array($this->k8sClusterNamespaces)) {
                $res['K8sClusterNamespaces'] = [];
                $n1 = 0;
                foreach ($this->k8sClusterNamespaces as $item1) {
                    $res['K8sClusterNamespaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['K8sClusterNamespaces'])) {
            if (!empty($map['K8sClusterNamespaces'])) {
                $model->k8sClusterNamespaces = [];
                $n1 = 0;
                foreach ($map['K8sClusterNamespaces'] as $item1) {
                    $model->k8sClusterNamespaces[$n1] = k8sClusterNamespaces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

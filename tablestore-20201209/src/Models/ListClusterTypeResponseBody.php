<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListClusterTypeResponseBody\clusterTypeInfos;

class ListClusterTypeResponseBody extends Model
{
    /**
     * @var clusterTypeInfos[]
     */
    public $clusterTypeInfos;

    /**
     * @var string[]
     */
    public $clusterTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTypeInfos' => 'ClusterTypeInfos',
        'clusterTypes' => 'ClusterTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterTypeInfos)) {
            Model::validateArray($this->clusterTypeInfos);
        }
        if (\is_array($this->clusterTypes)) {
            Model::validateArray($this->clusterTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterTypeInfos) {
            if (\is_array($this->clusterTypeInfos)) {
                $res['ClusterTypeInfos'] = [];
                $n1 = 0;
                foreach ($this->clusterTypeInfos as $item1) {
                    $res['ClusterTypeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterTypes) {
            if (\is_array($this->clusterTypes)) {
                $res['ClusterTypes'] = [];
                $n1 = 0;
                foreach ($this->clusterTypes as $item1) {
                    $res['ClusterTypes'][$n1] = $item1;
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
        if (isset($map['ClusterTypeInfos'])) {
            if (!empty($map['ClusterTypeInfos'])) {
                $model->clusterTypeInfos = [];
                $n1 = 0;
                foreach ($map['ClusterTypeInfos'] as $item1) {
                    $model->clusterTypeInfos[$n1] = clusterTypeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = [];
                $n1 = 0;
                foreach ($map['ClusterTypes'] as $item1) {
                    $model->clusterTypes[$n1] = $item1;
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

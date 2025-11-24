<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpdateMeshMultiClusterNetworkRequest extends Model
{
    /**
     * @var MultiClusterNetworksValue[]
     */
    public $multiClusterNetworks;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'multiClusterNetworks' => 'MultiClusterNetworks',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        if (\is_array($this->multiClusterNetworks)) {
            Model::validateArray($this->multiClusterNetworks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiClusterNetworks) {
            if (\is_array($this->multiClusterNetworks)) {
                $res['MultiClusterNetworks'] = [];
                foreach ($this->multiClusterNetworks as $key1 => $value1) {
                    $res['MultiClusterNetworks'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['MultiClusterNetworks'])) {
            if (!empty($map['MultiClusterNetworks'])) {
                $model->multiClusterNetworks = [];
                foreach ($map['MultiClusterNetworks'] as $key1 => $value1) {
                    $model->multiClusterNetworks[$key1] = MultiClusterNetworksValue::fromMap($value1);
                }
            }
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}

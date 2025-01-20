<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest\namespaceInfos;

class ModifyGovernanceKubernetesClusterRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var namespaceInfos[]
     */
    public $namespaceInfos;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId'      => 'ClusterId',
        'namespaceInfos' => 'NamespaceInfos',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceInfos)) {
            Model::validateArray($this->namespaceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->namespaceInfos) {
            if (\is_array($this->namespaceInfos)) {
                $res['NamespaceInfos'] = [];
                $n1                    = 0;
                foreach ($this->namespaceInfos as $item1) {
                    $res['NamespaceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NamespaceInfos'])) {
            if (!empty($map['NamespaceInfos'])) {
                $model->namespaceInfos = [];
                $n1                    = 0;
                foreach ($map['NamespaceInfos'] as $item1) {
                    $model->namespaceInfos[$n1++] = namespaceInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

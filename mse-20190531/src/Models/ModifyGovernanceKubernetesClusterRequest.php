<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest\namespaceInfos;
use AlibabaCloud\Tea\Model;

class ModifyGovernanceKubernetesClusterRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the instance.
     *
     * @example cd23228b3c80c4d4f9ad87cc3****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about the namespace for which Microservices Engine(MSE) Microservices Governance is enabled.
     *
     * @var namespaceInfos[]
     */
    public $namespaceInfos;

    /**
     * @description The ID of the region in which the instance resides. The region is supported by MSE.
     *
     * @example cn-hangzhou
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaceInfos) {
            $res['NamespaceInfos'] = [];
            if (null !== $this->namespaceInfos && \is_array($this->namespaceInfos)) {
                $n = 0;
                foreach ($this->namespaceInfos as $item) {
                    $res['NamespaceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGovernanceKubernetesClusterRequest
     */
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
                $n                     = 0;
                foreach ($map['NamespaceInfos'] as $item) {
                    $model->namespaceInfos[$n++] = null !== $item ? namespaceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

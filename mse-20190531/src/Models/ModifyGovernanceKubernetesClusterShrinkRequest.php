<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ModifyGovernanceKubernetesClusterShrinkRequest extends Model
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
     * This parameter is required.
     * @example cd23228b3c80c4d4f9ad87cc3****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about the namespace for which Microservices Engine(MSE) Microservices Governance is enabled.
     *
     * @var string
     */
    public $namespaceInfosShrink;

    /**
     * @description The ID of the region in which the instance resides. The region is supported by MSE.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'clusterId'            => 'ClusterId',
        'namespaceInfosShrink' => 'NamespaceInfos',
        'regionId'             => 'RegionId',
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
        if (null !== $this->namespaceInfosShrink) {
            $res['NamespaceInfos'] = $this->namespaceInfosShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGovernanceKubernetesClusterShrinkRequest
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
            $model->namespaceInfosShrink = $map['NamespaceInfos'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

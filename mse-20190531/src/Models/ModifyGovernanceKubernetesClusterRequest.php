<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

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
     * @description The information about the namespaces of the cluster.
     *
     * @example [{"Name":"default","Tags":{"mse-enable":"disabled","kubernetes.io/metadata.name":"default"}},{"Name":"test2","Tags":{"test2":"test2","kubernetes.io/metadata.name":"test2"}}]
     *
     * @var string
     */
    public $namespaceInfos;

    /**
     * @description The region in which the cluster resides.
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
            $res['NamespaceInfos'] = $this->namespaceInfos;
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
            $model->namespaceInfos = $map['NamespaceInfos'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateHybridMonitorNamespaceRequest extends Model
{
    /**
     * @description The description of the namespace.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the namespace.
     *
     * This parameter is required.
     * @example aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The region where the metric data is stored.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceRegion;

    /**
     * @description The storage scheme of metric data. Valid values:
     *
     *   m_prom_user: The metric data is stored in Simple Log Service.
     *   m_prom_pool: The metric data is stored in the private storage space provided by CloudMonitor.
     *
     * >  For more information about the storage schemes of metric data, see [Data storage schemes for Hybrid Cloud Monitoring](https://help.aliyun.com/document_detail/2594921.html).
     * @example m_prometheus
     *
     * @var string
     */
    public $namespaceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The data retention period. Valid values:
     *
     *   cms.s1.large (Retention Period 15 Days)
     *   cms.s1.xlarge (Retention Period 32 Days)
     *   cms.s1.2xlarge (Retention Period 63 Days)
     *   cms.s1.3xlarge (Retention Period 93 Days) (default)
     *   cms.s1.6xlarge (Retention Period 185 Days)
     *   cms.s1.12xlarge (Retention Period 367 Days)
     *
     * For information about the pricing for different retention periods, see the **Pricing** section in [Billing of the dashboard feature](https://help.aliyun.com/document_detail/223532.html).
     * @example cms.s1.3xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'description'     => 'Description',
        'namespace'       => 'Namespace',
        'namespaceRegion' => 'NamespaceRegion',
        'namespaceType'   => 'NamespaceType',
        'regionId'        => 'RegionId',
        'spec'            => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceRegion) {
            $res['NamespaceRegion'] = $this->namespaceRegion;
        }
        if (null !== $this->namespaceType) {
            $res['NamespaceType'] = $this->namespaceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridMonitorNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceRegion'])) {
            $model->namespaceRegion = $map['NamespaceRegion'];
        }
        if (isset($map['NamespaceType'])) {
            $model->namespaceType = $map['NamespaceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}

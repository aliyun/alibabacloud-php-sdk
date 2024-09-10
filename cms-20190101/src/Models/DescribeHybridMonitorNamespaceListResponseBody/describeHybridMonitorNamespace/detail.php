<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The region where the metric data is stored.
     *
     * >  This parameter is returned if you select `m_prom_user` for `NamespaceType` when you create a namespace.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $namespaceRegion;

    /**
     * @description The project where the metric data is located.
     *
     * >  This parameter is returned if you select `m_prom_user` for `NamespaceType` when you create a namespace.
     * @example cms-hybrid-120886317861****-cn-hangzhou-a83d
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @description The data retention period. Valid values:
     *
     *   cms.s1.large (Retention Period 15 Days)
     *   cms.s1.xlarge (Retention Period 32 Days)
     *   cms.s1.2xlarge (Retention Period 63 Days)
     *   cms.s1.3xlarge (Retention Period 93 Days)
     *   cms.s1.6xlarge (Retention Period 185 Days)
     *   cms.s1.12xlarge (Retention Period 367 Days)
     *
     * @example cms.s1.3xlarge
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'namespaceRegion' => 'NamespaceRegion',
        'SLSProject'      => 'SLSProject',
        'spec'            => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceRegion) {
            $res['NamespaceRegion'] = $this->namespaceRegion;
        }
        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceRegion'])) {
            $model->namespaceRegion = $map['NamespaceRegion'];
        }
        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}

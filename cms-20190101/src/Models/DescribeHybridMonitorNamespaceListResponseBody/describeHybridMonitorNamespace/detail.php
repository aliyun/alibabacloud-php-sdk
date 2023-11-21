<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $namespaceRegion;

    /**
     * @var string
     */
    public $SLSProject;

    /**
     * @description The data retention period. Valid values:
     *
     *   cms.s1.large: Data is stored for 15 days.
     *   cms.s1.xlarge: Data is stored for 32 days.
     *   cms.s1.2xlarge: Data is stored for 63 days.
     *   cms.s1.3xlarge: Data is stored for 93 days.
     *   cms.s1.6xlarge: Data is stored for 185 days.
     *   cms.s1.12xlarge: Data is stored for 376 days.
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $namespaceRegion;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $SLSProject;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'namespaceRegion' => 'NamespaceRegion',
        'prometheusInstanceId' => 'PrometheusInstanceId',
        'SLSProject' => 'SLSProject',
        'spec' => 'Spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceRegion) {
            $res['NamespaceRegion'] = $this->namespaceRegion;
        }

        if (null !== $this->prometheusInstanceId) {
            $res['PrometheusInstanceId'] = $this->prometheusInstanceId;
        }

        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['NamespaceRegion'])) {
            $model->namespaceRegion = $map['NamespaceRegion'];
        }

        if (isset($map['PrometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['PrometheusInstanceId'];
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

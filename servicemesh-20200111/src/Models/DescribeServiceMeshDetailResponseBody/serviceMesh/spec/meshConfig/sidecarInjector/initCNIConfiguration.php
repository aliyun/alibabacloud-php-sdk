<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector;

use AlibabaCloud\Tea\Model;

class initCNIConfiguration extends Model
{
    /**
     * @var string
     */
    public $excludeNamespaces;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'excludeNamespaces' => 'ExcludeNamespaces',
        'enabled'           => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeNamespaces) {
            $res['ExcludeNamespaces'] = $this->excludeNamespaces;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initCNIConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeNamespaces'])) {
            $model->excludeNamespaces = $map['ExcludeNamespaces'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}

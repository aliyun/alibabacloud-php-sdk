<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector;

use AlibabaCloud\Dara\Model;

class initCNIConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $excludeNamespaces;
    protected $_name = [
        'enabled' => 'Enabled',
        'excludeNamespaces' => 'ExcludeNamespaces',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->excludeNamespaces) {
            $res['ExcludeNamespaces'] = $this->excludeNamespaces;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ExcludeNamespaces'])) {
            $model->excludeNamespaces = $map['ExcludeNamespaces'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest\convertPostpayInstanceRequest;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest\convertPostpayInstanceRequest\namespaceResourceSpecs\resourceSpec;
use AlibabaCloud\Tea\Model;

class namespaceResourceSpecs extends Model
{
    /**
     * @example ns-1
     *
     * @var string
     */
    public $namespace;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'namespace'    => 'Namespace',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaceResourceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}

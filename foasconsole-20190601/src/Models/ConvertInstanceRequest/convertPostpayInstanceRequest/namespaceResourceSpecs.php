<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest\convertPostpayInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ConvertInstanceRequest\convertPostpayInstanceRequest\namespaceResourceSpecs\resourceSpec;

class namespaceResourceSpecs extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'namespace' => 'Namespace',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}

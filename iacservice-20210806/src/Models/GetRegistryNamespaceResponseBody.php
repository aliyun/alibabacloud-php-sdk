<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryNamespaceResponseBody\namespace_;

class GetRegistryNamespaceResponseBody extends Model
{
    /**
     * @var namespace_
     */
    public $namespace;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'namespace' => 'namespace',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->namespace) {
            $this->namespace->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = null !== $this->namespace ? $this->namespace->toArray($noStream) : $this->namespace;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['namespace'])) {
            $model->namespace = namespace_::fromMap($map['namespace']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

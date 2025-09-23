<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\UpdateResourceShareResponseBody\resourceShare;

class UpdateResourceShareResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceShare
     */
    public $resourceShare;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceShare' => 'ResourceShare',
    ];

    public function validate()
    {
        if (null !== $this->resourceShare) {
            $this->resourceShare->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceShare) {
            $res['ResourceShare'] = null !== $this->resourceShare ? $this->resourceShare->toArray($noStream) : $this->resourceShare;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceShare'])) {
            $model->resourceShare = resourceShare::fromMap($map['ResourceShare']);
        }

        return $model;
    }
}

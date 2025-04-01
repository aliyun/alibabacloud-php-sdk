<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstanceAttributeResponseBody\instances;

class DescribeTairKVCacheInferInstanceAttributeResponseBody extends Model
{
    /**
     * @var instances
     */
    public $instances;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instances' => 'Instances',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instances) {
            $this->instances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toArray($noStream) : $this->instances;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

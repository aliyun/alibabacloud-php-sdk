<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponseBody\liveDomainModels;

class DescribeLiveDomainMappingResponseBody extends Model
{
    /**
     * @var liveDomainModels
     */
    public $liveDomainModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveDomainModels' => 'LiveDomainModels',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveDomainModels) {
            $this->liveDomainModels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveDomainModels) {
            $res['LiveDomainModels'] = null !== $this->liveDomainModels ? $this->liveDomainModels->toArray($noStream) : $this->liveDomainModels;
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
        if (isset($map['LiveDomainModels'])) {
            $model->liveDomainModels = liveDomainModels::fromMap($map['LiveDomainModels']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

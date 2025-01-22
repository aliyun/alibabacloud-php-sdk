<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var ChannelAssemblySource
     */
    public $source;
    protected $_name = [
        'requestId' => 'RequestId',
        'source'    => 'Source',
    ];

    public function validate()
    {
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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

        if (isset($map['Source'])) {
            $model->source = ChannelAssemblySource::fromMap($map['Source']);
        }

        return $model;
    }
}

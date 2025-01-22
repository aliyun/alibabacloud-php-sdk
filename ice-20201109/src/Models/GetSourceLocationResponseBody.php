<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetSourceLocationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var ChannelAssemblySourceLocation
     */
    public $sourceLocation;
    protected $_name = [
        'requestId'      => 'RequestId',
        'sourceLocation' => 'SourceLocation',
    ];

    public function validate()
    {
        if (null !== $this->sourceLocation) {
            $this->sourceLocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = null !== $this->sourceLocation ? $this->sourceLocation->toArray($noStream) : $this->sourceLocation;
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

        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = ChannelAssemblySourceLocation::fromMap($map['SourceLocation']);
        }

        return $model;
    }
}

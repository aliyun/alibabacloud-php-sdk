<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetSourceLocationResponseBody extends Model
{
    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The source location information.
     *
     * @var ChannelAssemblySourceLocation
     */
    public $sourceLocation;
    protected $_name = [
        'requestId' => 'RequestId',
        'sourceLocation' => 'SourceLocation',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = null !== $this->sourceLocation ? $this->sourceLocation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSourceLocationResponseBody
     */
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

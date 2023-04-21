<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetSpMetadataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metadata of the SP.
     *
     * @example <?xml version=************\/md:EntityDescriptor>
     *
     * @var string
     */
    public $spMetadata;
    protected $_name = [
        'requestId'  => 'RequestId',
        'spMetadata' => 'SpMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spMetadata) {
            $res['SpMetadata'] = $this->spMetadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpMetadata'])) {
            $model->spMetadata = $map['SpMetadata'];
        }

        return $model;
    }
}

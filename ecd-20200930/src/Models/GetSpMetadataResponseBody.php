<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetSpMetadataResponseBody extends Model
{
    /**
     * @var string
     */
    public $spMetadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'spMetadata' => 'SpMetadata',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spMetadata) {
            $res['SpMetadata'] = $this->spMetadata;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['SpMetadata'])) {
            $model->spMetadata = $map['SpMetadata'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

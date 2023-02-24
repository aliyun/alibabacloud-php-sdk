<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponseBody\keyMetadata;
use AlibabaCloud\Tea\Model;

class DescribeKeyResponseBody extends Model
{
    /**
     * @description The metadata of the CMK.
     *
     * @var keyMetadata
     */
    public $keyMetadata;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example f1fdfa9d-bd49-418b-942f-8f3e3ec00a4f
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyMetadata' => 'KeyMetadata',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyMetadata) {
            $res['KeyMetadata'] = null !== $this->keyMetadata ? $this->keyMetadata->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyMetadata'])) {
            $model->keyMetadata = keyMetadata::fromMap($map['KeyMetadata']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

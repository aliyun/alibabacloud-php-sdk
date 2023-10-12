<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceInformationResponseBody extends Model
{
    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example resourceInformationId
     *
     * @var string
     */
    public $resourceInformationId;
    protected $_name = [
        'requestId'             => 'RequestId',
        'resourceInformationId' => 'ResourceInformationId',
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
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceInformationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceProfileResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceProfileId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceProfileId' => 'ResourceProfileId',
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
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateImageTransformResponseBody extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description Request ID.
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configId' => 'ConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageTransformResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

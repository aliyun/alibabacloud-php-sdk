<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceResponseBody extends Model
{
    /**
     * @example bailian-qwen-basic-v1-ft-202307111653-d2d7dbff
     *
     * @var string
     */
    public $modelServiceId;

    /**
     * @example 17204B98-7734-4F9A-8464-2446A84821CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modelServiceId' => 'ModelServiceId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

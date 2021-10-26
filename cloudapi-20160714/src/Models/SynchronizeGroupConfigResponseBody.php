<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SynchronizeGroupConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $launch;
    protected $_name = [
        'operationId' => 'OperationId',
        'requestId'   => 'RequestId',
        'launch'      => 'Launch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->launch) {
            $res['Launch'] = $this->launch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SynchronizeGroupConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Launch'])) {
            $model->launch = $map['Launch'];
        }

        return $model;
    }
}

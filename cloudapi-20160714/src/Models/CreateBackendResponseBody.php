<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateBackendResponseBody extends Model
{
    /**
     * @description The ID of the backend service.
     *
     * @example 0d105f80a8f340408bd34954d4e4ff22
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The ID of the request.
     *
     * @example 66D84355-164D-53ED-81FF-03DCF181DE24
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backendId' => 'BackendId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

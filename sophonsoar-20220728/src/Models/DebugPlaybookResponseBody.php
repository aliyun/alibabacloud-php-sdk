<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DebugPlaybookResponseBody extends Model
{
    /**
     * @example 75E56B2C-C8FA-5A2F-AA08-8745E2AC33EF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 6d412cfa-0905-4567-8a83-xxxxxx
     *
     * @var string
     */
    public $requestUuid;
    protected $_name = [
        'requestId'   => 'RequestId',
        'requestUuid' => 'RequestUuid',
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
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugPlaybookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartDiscoverDatabaseTaskResponseBody extends Model
{
    /**
     * @description The ID of the scan task.
     *
     * @example 48bced6d-2aee-4fa2-9aba-b846b77b****
     *
     * @var string
     */
    public $createMark;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example F46921AF-CC55-5971-92C9-7E09E160****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createMark' => 'CreateMark',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createMark) {
            $res['CreateMark'] = $this->createMark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDiscoverDatabaseTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateMark'])) {
            $model->createMark = $map['CreateMark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

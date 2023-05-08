<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StartVirusScanTaskResponseBody extends Model
{
    /**
     * @example DAE17926-4ABE-4DBD-9600-DDCB9B200F35
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 282832
     *
     * @var int
     */
    public $scanTaskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'scanTaskId' => 'ScanTaskId',
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
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartVirusScanTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }

        return $model;
    }
}

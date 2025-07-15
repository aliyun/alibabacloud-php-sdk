<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponseBody\logInfos;
use AlibabaCloud\Tea\Model;

class DescribeLogConfigResponseBody extends Model
{
    /**
     * @description Info of the log config.
     *
     * @var logInfos
     */
    public $logInfos;

    /**
     * @description The ID of the request.
     *
     * @example E3BC2706-ABDB-5B64-A12F-08DFD9E3F339
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logInfos' => 'LogInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfos) {
            $res['LogInfos'] = null !== $this->logInfos ? $this->logInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfos'])) {
            $model->logInfos = logInfos::fromMap($map['LogInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

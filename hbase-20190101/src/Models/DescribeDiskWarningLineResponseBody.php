<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskWarningLineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $warningLine;
    protected $_name = [
        'requestId'   => 'RequestId',
        'warningLine' => 'WarningLine',
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
        if (null !== $this->warningLine) {
            $res['WarningLine'] = $this->warningLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskWarningLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WarningLine'])) {
            $model->warningLine = $map['WarningLine'];
        }

        return $model;
    }
}

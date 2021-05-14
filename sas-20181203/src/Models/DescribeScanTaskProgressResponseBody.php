<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeScanTaskProgressResponseBody extends Model
{
    /**
     * @var string
     */
    public $targetInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scanTaskProgress;
    protected $_name = [
        'targetInfo'       => 'TargetInfo',
        'requestId'        => 'RequestId',
        'scanTaskProgress' => 'ScanTaskProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanTaskProgress) {
            $res['ScanTaskProgress'] = $this->scanTaskProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScanTaskProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanTaskProgress'])) {
            $model->scanTaskProgress = $map['ScanTaskProgress'];
        }

        return $model;
    }
}

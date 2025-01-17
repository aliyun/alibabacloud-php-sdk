<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeScanTaskProgressResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scanTaskProgress;
    /**
     * @var string
     */
    public $targetInfo;
    protected $_name = [
        'requestId'        => 'RequestId',
        'scanTaskProgress' => 'ScanTaskProgress',
        'targetInfo'       => 'TargetInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scanTaskProgress) {
            $res['ScanTaskProgress'] = $this->scanTaskProgress;
        }

        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScanTaskProgress'])) {
            $model->scanTaskProgress = $map['ScanTaskProgress'];
        }

        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        return $model;
    }
}

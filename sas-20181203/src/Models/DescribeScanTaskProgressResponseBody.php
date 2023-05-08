<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeScanTaskProgressResponseBody extends Model
{
    /**
     * @example EA15BA8A-D631-4375-8D40-CB7C769B0279
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Success
     *
     * @var string
     */
    public $scanTaskProgress;

    /**
     * @example [{"type":"uuid","name":"host001","target":"503201a7-14c6-4280-801b-1169ed42****"}]
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeScanTaskProgressResponseBody
     */
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

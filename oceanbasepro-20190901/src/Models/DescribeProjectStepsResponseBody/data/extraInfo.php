<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectStepsResponseBody\data\extraInfo\errorDetails;
use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @example INNER_ERROR
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example The ResourceDirectoryId is invalid.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @var string[]
     */
    public $errorParam;

    /**
     * @example null
     *
     * @var string
     */
    public $failedTime;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorDetails' => 'ErrorDetails',
        'errorMsg'     => 'ErrorMsg',
        'errorParam'   => 'ErrorParam',
        'failedTime'   => 'FailedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->errorParam) {
            $res['ErrorParam'] = $this->errorParam;
        }
        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ErrorParam'])) {
            $model->errorParam = $map['ErrorParam'];
        }
        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\steps;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data\steps\extraInfo\errorDetails;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string[]
     */
    public $errorParam;

    /**
     * @var string
     */
    public $failedTime;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorDetails' => 'ErrorDetails',
        'errorMsg' => 'ErrorMsg',
        'errorParam' => 'ErrorParam',
        'failedTime' => 'FailedTime',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        if (\is_array($this->errorParam)) {
            Model::validateArray($this->errorParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorDetails) {
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->errorParam) {
            if (\is_array($this->errorParam)) {
                $res['ErrorParam'] = [];
                foreach ($this->errorParam as $key1 => $value1) {
                    $res['ErrorParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1++] = errorDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['ErrorParam'])) {
            if (!empty($map['ErrorParam'])) {
                $model->errorParam = [];
                foreach ($map['ErrorParam'] as $key1 => $value1) {
                    $model->errorParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }

        return $model;
    }
}

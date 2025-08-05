<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListResponseBody\fullProcessList;

class DescribeFullProcessListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $configList;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var fullProcessList[]
     */
    public $fullProcessList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'configList' => 'ConfigList',
        'dtsJobId' => 'DtsJobId',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'fullProcessList' => 'FullProcessList',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        if (\is_array($this->fullProcessList)) {
            Model::validateArray($this->fullProcessList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->configList) {
            if (\is_array($this->configList)) {
                $res['ConfigList'] = [];
                foreach ($this->configList as $key1 => $value1) {
                    $res['ConfigList'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->fullProcessList) {
            if (\is_array($this->fullProcessList)) {
                $res['FullProcessList'] = [];
                $n1 = 0;
                foreach ($this->fullProcessList as $item1) {
                    $res['FullProcessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                foreach ($map['ConfigList'] as $key1 => $value1) {
                    $model->configList[$key1] = $value1;
                }
            }
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['FullProcessList'])) {
            if (!empty($map['FullProcessList'])) {
                $model->fullProcessList = [];
                $n1 = 0;
                foreach ($map['FullProcessList'] as $item1) {
                    $model->fullProcessList[$n1] = fullProcessList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

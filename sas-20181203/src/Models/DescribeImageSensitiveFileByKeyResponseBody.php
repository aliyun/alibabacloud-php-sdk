<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody\sensitiveFileList;

class DescribeImageSensitiveFileByKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $message;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var sensitiveFileList[]
     */
    public $sensitiveFileList;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'httpStatusCode'    => 'HttpStatusCode',
        'message'           => 'Message',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
        'sensitiveFileList' => 'SensitiveFileList',
        'success'           => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->sensitiveFileList)) {
            Model::validateArray($this->sensitiveFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitiveFileList) {
            if (\is_array($this->sensitiveFileList)) {
                $res['SensitiveFileList'] = [];
                $n1                       = 0;
                foreach ($this->sensitiveFileList as $item1) {
                    $res['SensitiveFileList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SensitiveFileList'])) {
            if (!empty($map['SensitiveFileList'])) {
                $model->sensitiveFileList = [];
                $n1                       = 0;
                foreach ($map['SensitiveFileList'] as $item1) {
                    $model->sensitiveFileList[$n1++] = sensitiveFileList::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

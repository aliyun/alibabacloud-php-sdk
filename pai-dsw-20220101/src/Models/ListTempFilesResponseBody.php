<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListTempFilesResponseBody\quota;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListTempFilesResponseBody\tempFiles;

class ListTempFilesResponseBody extends Model
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
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var tempFiles[]
     */
    public $tempFiles;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'quota' => 'Quota',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'tempFiles' => 'TempFiles',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        if (\is_array($this->tempFiles)) {
            Model::validateArray($this->tempFiles);
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

        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->tempFiles) {
            if (\is_array($this->tempFiles)) {
                $res['TempFiles'] = [];
                $n1 = 0;
                foreach ($this->tempFiles as $item1) {
                    $res['TempFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TempFiles'])) {
            if (!empty($map['TempFiles'])) {
                $model->tempFiles = [];
                $n1 = 0;
                foreach ($map['TempFiles'] as $item1) {
                    $model->tempFiles[$n1] = tempFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

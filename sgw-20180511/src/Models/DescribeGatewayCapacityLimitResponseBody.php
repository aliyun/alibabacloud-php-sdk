<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayCapacityLimitResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $fileNumber;

    /**
     * @var int
     */
    public $fileSystemSizeInTB;

    /**
     * @var bool
     */
    public $isMetadataSeparate;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'fileNumber'         => 'FileNumber',
        'fileSystemSizeInTB' => 'FileSystemSizeInTB',
        'isMetadataSeparate' => 'IsMetadataSeparate',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->fileNumber) {
            $res['FileNumber'] = $this->fileNumber;
        }
        if (null !== $this->fileSystemSizeInTB) {
            $res['FileSystemSizeInTB'] = $this->fileSystemSizeInTB;
        }
        if (null !== $this->isMetadataSeparate) {
            $res['IsMetadataSeparate'] = $this->isMetadataSeparate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayCapacityLimitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FileNumber'])) {
            $model->fileNumber = $map['FileNumber'];
        }
        if (isset($map['FileSystemSizeInTB'])) {
            $model->fileSystemSizeInTB = $map['FileSystemSizeInTB'];
        }
        if (isset($map['IsMetadataSeparate'])) {
            $model->isMetadataSeparate = $map['IsMetadataSeparate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

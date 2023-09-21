<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody\sensitiveFileList;
use AlibabaCloud\Tea\Model;

class DescribeImageSensitiveFileByKeyResponseBody extends Model
{
    /**
     * @description The status code returned. If the 200 status code is returned, the request was successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The error message returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the sensitive files.
     *
     * @var sensitiveFileList[]
     */
    public $sensitiveFileList;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
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
    }

    public function toMap()
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
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sensitiveFileList) {
            $res['SensitiveFileList'] = [];
            if (null !== $this->sensitiveFileList && \is_array($this->sensitiveFileList)) {
                $n = 0;
                foreach ($this->sensitiveFileList as $item) {
                    $res['SensitiveFileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSensitiveFileByKeyResponseBody
     */
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
                $n                        = 0;
                foreach ($map['SensitiveFileList'] as $item) {
                    $model->sensitiveFileList[$n++] = null !== $item ? sensitiveFileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

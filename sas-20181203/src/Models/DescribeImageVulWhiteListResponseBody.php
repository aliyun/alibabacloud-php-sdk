<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulWhiteListResponseBody\imageVulWhitelist;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulWhiteListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageVulWhiteListResponseBody extends Model
{
    /**
     * @description The status code returned. A value of **200** indicates that the request was successful. Other values indicate that the request failed. You can identify the cause of the failure based on the value of this parameter.
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
     * @description The information about the whitelist of image vulnerabilities.
     *
     * @var imageVulWhitelist[]
     */
    public $imageVulWhitelist;

    /**
     * @description The message returned.
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
     * @description The request ID.
     *
     * @example 911025D0-3D1E-5213-A18A-37EA0C92****
     *
     * @var string
     */
    public $requestId;

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

    /**
     * @description The amount of time that was consumed to process the request. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'code'              => 'Code',
        'httpStatusCode'    => 'HttpStatusCode',
        'imageVulWhitelist' => 'ImageVulWhitelist',
        'message'           => 'Message',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'timeCost'          => 'TimeCost',
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
        if (null !== $this->imageVulWhitelist) {
            $res['ImageVulWhitelist'] = [];
            if (null !== $this->imageVulWhitelist && \is_array($this->imageVulWhitelist)) {
                $n = 0;
                foreach ($this->imageVulWhitelist as $item) {
                    $res['ImageVulWhitelist'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageVulWhiteListResponseBody
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
        if (isset($map['ImageVulWhitelist'])) {
            if (!empty($map['ImageVulWhitelist'])) {
                $model->imageVulWhitelist = [];
                $n                        = 0;
                foreach ($map['ImageVulWhitelist'] as $item) {
                    $model->imageVulWhitelist[$n++] = null !== $item ? imageVulWhitelist::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}

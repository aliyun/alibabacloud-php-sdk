<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulWhiteListResponseBody\imageVulWhitelist;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageVulWhiteListResponseBody\pageInfo;

class DescribeImageVulWhiteListResponseBody extends Model
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
     * @var imageVulWhitelist[]
     */
    public $imageVulWhitelist;

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
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $timeCost;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'imageVulWhitelist' => 'ImageVulWhitelist',
        'message' => 'Message',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'timeCost' => 'TimeCost',
    ];

    public function validate()
    {
        if (\is_array($this->imageVulWhitelist)) {
            Model::validateArray($this->imageVulWhitelist);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
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

        if (null !== $this->imageVulWhitelist) {
            if (\is_array($this->imageVulWhitelist)) {
                $res['ImageVulWhitelist'] = [];
                $n1 = 0;
                foreach ($this->imageVulWhitelist as $item1) {
                    $res['ImageVulWhitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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

        if (isset($map['ImageVulWhitelist'])) {
            if (!empty($map['ImageVulWhitelist'])) {
                $model->imageVulWhitelist = [];
                $n1 = 0;
                foreach ($map['ImageVulWhitelist'] as $item1) {
                    $model->imageVulWhitelist[$n1] = imageVulWhitelist::fromMap($item1);
                    ++$n1;
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

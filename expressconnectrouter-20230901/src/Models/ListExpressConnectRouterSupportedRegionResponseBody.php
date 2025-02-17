<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;

class ListExpressConnectRouterSupportedRegionResponseBody extends Model
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
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var string[]
     */
    public $supportedRegionIdList;
    protected $_name = [
        'code'                  => 'Code',
        'httpStatusCode'        => 'HttpStatusCode',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'supportedRegionIdList' => 'SupportedRegionIdList',
    ];

    public function validate()
    {
        if (\is_array($this->supportedRegionIdList)) {
            Model::validateArray($this->supportedRegionIdList);
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->supportedRegionIdList) {
            if (\is_array($this->supportedRegionIdList)) {
                $res['SupportedRegionIdList'] = [];
                $n1                           = 0;
                foreach ($this->supportedRegionIdList as $item1) {
                    $res['SupportedRegionIdList'][$n1++] = $item1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['SupportedRegionIdList'])) {
            if (!empty($map['SupportedRegionIdList'])) {
                $model->supportedRegionIdList = [];
                $n1                           = 0;
                foreach ($map['SupportedRegionIdList'] as $item1) {
                    $model->supportedRegionIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody\internetIPs;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody\intranetIPs;
use AlibabaCloud\Tea\Model;

class DescribeNodeCidrListResponseBody extends Model
{
    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var internetIPs
     */
    public $internetIPs;

    /**
     * @var intranetIPs
     */
    public $intranetIPs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'internetIPs'    => 'InternetIPs',
        'intranetIPs'    => 'IntranetIPs',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->internetIPs) {
            $res['InternetIPs'] = null !== $this->internetIPs ? $this->internetIPs->toMap() : null;
        }
        if (null !== $this->intranetIPs) {
            $res['IntranetIPs'] = null !== $this->intranetIPs ? $this->intranetIPs->toMap() : null;
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
     * @return DescribeNodeCidrListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['InternetIPs'])) {
            $model->internetIPs = internetIPs::fromMap($map['InternetIPs']);
        }
        if (isset($map['IntranetIPs'])) {
            $model->intranetIPs = intranetIPs::fromMap($map['IntranetIPs']);
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

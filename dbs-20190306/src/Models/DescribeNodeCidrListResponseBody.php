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
    public $requestId;

    /**
     * @var internetIPs
     */
    public $internetIPs;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var intranetIPs
     */
    public $intranetIPs;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'internetIPs'    => 'InternetIPs',
        'httpStatusCode' => 'HttpStatusCode',
        'intranetIPs'    => 'IntranetIPs',
        'errMessage'     => 'ErrMessage',
        'success'        => 'Success',
        'errCode'        => 'ErrCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->internetIPs) {
            $res['InternetIPs'] = null !== $this->internetIPs ? $this->internetIPs->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->intranetIPs) {
            $res['IntranetIPs'] = null !== $this->intranetIPs ? $this->intranetIPs->toMap() : null;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InternetIPs'])) {
            $model->internetIPs = internetIPs::fromMap($map['InternetIPs']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['IntranetIPs'])) {
            $model->intranetIPs = intranetIPs::fromMap($map['IntranetIPs']);
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        return $model;
    }
}

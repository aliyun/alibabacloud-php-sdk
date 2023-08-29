<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult;
use AlibabaCloud\Tea\Model;

class GetMcubeUpgradePackageInfoResponseBody extends Model
{
    /**
     * @var getPackageResult
     */
    public $getPackageResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMessage;
    protected $_name = [
        'getPackageResult' => 'GetPackageResult',
        'requestId'        => 'RequestId',
        'resultCode'       => 'ResultCode',
        'resultMessage'    => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->getPackageResult) {
            $res['GetPackageResult'] = null !== $this->getPackageResult ? $this->getPackageResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMcubeUpgradePackageInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GetPackageResult'])) {
            $model->getPackageResult = getPackageResult::fromMap($map['GetPackageResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigResponseBody\exportMappCenterAppConfigResult;
use AlibabaCloud\Tea\Model;

class ExportMappCenterAppConfigResponseBody extends Model
{
    /**
     * @var exportMappCenterAppConfigResult
     */
    public $exportMappCenterAppConfigResult;

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
        'exportMappCenterAppConfigResult' => 'ExportMappCenterAppConfigResult',
        'requestId'                       => 'RequestId',
        'resultCode'                      => 'ResultCode',
        'resultMessage'                   => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportMappCenterAppConfigResult) {
            $res['ExportMappCenterAppConfigResult'] = null !== $this->exportMappCenterAppConfigResult ? $this->exportMappCenterAppConfigResult->toMap() : null;
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
     * @return ExportMappCenterAppConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportMappCenterAppConfigResult'])) {
            $model->exportMappCenterAppConfigResult = exportMappCenterAppConfigResult::fromMap($map['ExportMappCenterAppConfigResult']);
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

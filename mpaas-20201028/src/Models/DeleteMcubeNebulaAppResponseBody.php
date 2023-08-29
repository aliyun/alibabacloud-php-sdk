<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeNebulaAppResponseBody\deleteMcubeNebulaAppResult;
use AlibabaCloud\Tea\Model;

class DeleteMcubeNebulaAppResponseBody extends Model
{
    /**
     * @var deleteMcubeNebulaAppResult
     */
    public $deleteMcubeNebulaAppResult;

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
        'deleteMcubeNebulaAppResult' => 'DeleteMcubeNebulaAppResult',
        'requestId'                  => 'RequestId',
        'resultCode'                 => 'ResultCode',
        'resultMessage'              => 'ResultMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMcubeNebulaAppResult) {
            $res['DeleteMcubeNebulaAppResult'] = null !== $this->deleteMcubeNebulaAppResult ? $this->deleteMcubeNebulaAppResult->toMap() : null;
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
     * @return DeleteMcubeNebulaAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteMcubeNebulaAppResult'])) {
            $model->deleteMcubeNebulaAppResult = deleteMcubeNebulaAppResult::fromMap($map['DeleteMcubeNebulaAppResult']);
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

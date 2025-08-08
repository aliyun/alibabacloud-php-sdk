<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaAppsResponseBody\listMcubeNebulaAppsResult;

class ListMcubeNebulaAppsResponseBody extends Model
{
    /**
     * @var listMcubeNebulaAppsResult
     */
    public $listMcubeNebulaAppsResult;

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
        'listMcubeNebulaAppsResult' => 'ListMcubeNebulaAppsResult',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMessage' => 'ResultMessage',
    ];

    public function validate()
    {
        if (null !== $this->listMcubeNebulaAppsResult) {
            $this->listMcubeNebulaAppsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listMcubeNebulaAppsResult) {
            $res['ListMcubeNebulaAppsResult'] = null !== $this->listMcubeNebulaAppsResult ? $this->listMcubeNebulaAppsResult->toArray($noStream) : $this->listMcubeNebulaAppsResult;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListMcubeNebulaAppsResult'])) {
            $model->listMcubeNebulaAppsResult = listMcubeNebulaAppsResult::fromMap($map['ListMcubeNebulaAppsResult']);
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

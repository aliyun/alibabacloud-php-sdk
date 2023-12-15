<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\ApproveFabricChaincodeDefinitionResponseBody\result;
use AlibabaCloud\Tea\Model;

class ApproveFabricChaincodeDefinitionResponseBody extends Model
{
    /**
     * @var string
     */
    public $chaincodeDefinitionId;

    /**
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @var int
     */
    public $errorCode;

    /**
     * @var bool
     */
    public $initRequired;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'chaincodeDefinitionId' => 'ChaincodeDefinitionId',
        'chaincodePackageId'    => 'ChaincodePackageId',
        'errorCode'             => 'ErrorCode',
        'initRequired'          => 'InitRequired',
        'requestId'             => 'RequestId',
        'result'                => 'Result',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeDefinitionId) {
            $res['ChaincodeDefinitionId'] = $this->chaincodeDefinitionId;
        }
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->initRequired) {
            $res['InitRequired'] = $this->initRequired;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveFabricChaincodeDefinitionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeDefinitionId'])) {
            $model->chaincodeDefinitionId = $map['ChaincodeDefinitionId'];
        }
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['InitRequired'])) {
            $model->initRequired = $map['InitRequired'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

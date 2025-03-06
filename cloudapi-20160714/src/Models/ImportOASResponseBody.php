<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\errorMessages;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedApis;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedModels;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\warningMessages;
use AlibabaCloud\Tea\Model;

class ImportOASResponseBody extends Model
{
    /**
     * @description The error messages that appear due to the invalid data in the imported file.
     *
     * @var errorMessages
     */
    public $errorMessages;

    /**
     * @description The APIs that failed to pass the precheck.
     *
     * @var failedApis
     */
    public $failedApis;

    /**
     * @description The information about the models that failed to pass the precheck.
     *
     * @var failedModels
     */
    public $failedModels;

    /**
     * @description The ID of the asynchronous API import task that was generated during the import operation. This ID is used to query the execution status of the API import task.
     *
     * @example c16a1880f5164d779f6a54f64d997cd9
     *
     * @var string
     */
    public $operationId;

    /**
     * @description The ID of the request.
     *
     * @example E7FE7172-AA75-5880-B6F7-C00893E9BC06
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the APIs that have passed the precheck.
     *
     * @var successApis
     */
    public $successApis;

    /**
     * @description The information about the models that have passed the precheck.
     *
     * @var successModels
     */
    public $successModels;

    /**
     * @description The warning messages that appear due to the invalid data in the imported file.
     *
     * @var warningMessages
     */
    public $warningMessages;
    protected $_name = [
        'errorMessages'   => 'ErrorMessages',
        'failedApis'      => 'FailedApis',
        'failedModels'    => 'FailedModels',
        'operationId'     => 'OperationId',
        'requestId'       => 'RequestId',
        'successApis'     => 'SuccessApis',
        'successModels'   => 'SuccessModels',
        'warningMessages' => 'WarningMessages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessages) {
            $res['ErrorMessages'] = null !== $this->errorMessages ? $this->errorMessages->toMap() : null;
        }
        if (null !== $this->failedApis) {
            $res['FailedApis'] = null !== $this->failedApis ? $this->failedApis->toMap() : null;
        }
        if (null !== $this->failedModels) {
            $res['FailedModels'] = null !== $this->failedModels ? $this->failedModels->toMap() : null;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successApis) {
            $res['SuccessApis'] = null !== $this->successApis ? $this->successApis->toMap() : null;
        }
        if (null !== $this->successModels) {
            $res['SuccessModels'] = null !== $this->successModels ? $this->successModels->toMap() : null;
        }
        if (null !== $this->warningMessages) {
            $res['WarningMessages'] = null !== $this->warningMessages ? $this->warningMessages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportOASResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessages'])) {
            $model->errorMessages = errorMessages::fromMap($map['ErrorMessages']);
        }
        if (isset($map['FailedApis'])) {
            $model->failedApis = failedApis::fromMap($map['FailedApis']);
        }
        if (isset($map['FailedModels'])) {
            $model->failedModels = failedModels::fromMap($map['FailedModels']);
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessApis'])) {
            $model->successApis = successApis::fromMap($map['SuccessApis']);
        }
        if (isset($map['SuccessModels'])) {
            $model->successModels = successModels::fromMap($map['SuccessModels']);
        }
        if (isset($map['WarningMessages'])) {
            $model->warningMessages = warningMessages::fromMap($map['WarningMessages']);
        }

        return $model;
    }
}

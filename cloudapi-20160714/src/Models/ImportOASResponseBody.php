<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\errorMessages;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedApis;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedModels;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\warningMessages;

class ImportOASResponseBody extends Model
{
    /**
     * @var errorMessages
     */
    public $errorMessages;
    /**
     * @var failedApis
     */
    public $failedApis;
    /**
     * @var failedModels
     */
    public $failedModels;
    /**
     * @var string
     */
    public $operationId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var successApis
     */
    public $successApis;
    /**
     * @var successModels
     */
    public $successModels;
    /**
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
        if (null !== $this->errorMessages) {
            $this->errorMessages->validate();
        }
        if (null !== $this->failedApis) {
            $this->failedApis->validate();
        }
        if (null !== $this->failedModels) {
            $this->failedModels->validate();
        }
        if (null !== $this->successApis) {
            $this->successApis->validate();
        }
        if (null !== $this->successModels) {
            $this->successModels->validate();
        }
        if (null !== $this->warningMessages) {
            $this->warningMessages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessages) {
            $res['ErrorMessages'] = null !== $this->errorMessages ? $this->errorMessages->toArray($noStream) : $this->errorMessages;
        }

        if (null !== $this->failedApis) {
            $res['FailedApis'] = null !== $this->failedApis ? $this->failedApis->toArray($noStream) : $this->failedApis;
        }

        if (null !== $this->failedModels) {
            $res['FailedModels'] = null !== $this->failedModels ? $this->failedModels->toArray($noStream) : $this->failedModels;
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successApis) {
            $res['SuccessApis'] = null !== $this->successApis ? $this->successApis->toArray($noStream) : $this->successApis;
        }

        if (null !== $this->successModels) {
            $res['SuccessModels'] = null !== $this->successModels ? $this->successModels->toArray($noStream) : $this->successModels;
        }

        if (null !== $this->warningMessages) {
            $res['WarningMessages'] = null !== $this->warningMessages ? $this->warningMessages->toArray($noStream) : $this->warningMessages;
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

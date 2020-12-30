<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\ValidateConfigSettingResponseBody\configValidationResults;
use AlibabaCloud\Tea\Model;

class ValidateConfigSettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configValidationResults
     */
    public $configValidationResults;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'configValidationResults' => 'ConfigValidationResults',
        'code'                    => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configValidationResults) {
            $res['ConfigValidationResults'] = null !== $this->configValidationResults ? $this->configValidationResults->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateConfigSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigValidationResults'])) {
            $model->configValidationResults = configValidationResults::fromMap($map['ConfigValidationResults']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

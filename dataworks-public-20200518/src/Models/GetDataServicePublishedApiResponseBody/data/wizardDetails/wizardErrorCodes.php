<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponseBody\data\wizardDetails;

use AlibabaCloud\Tea\Model;

class wizardErrorCodes extends Model
{
    /**
     * @description The error code returned.
     *
     * @example 1001
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example fail to call
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The solution used to fix the error.
     *
     * @example retry
     *
     * @var string
     */
    public $errorSolution;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'errorSolution' => 'ErrorSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorSolution) {
            $res['ErrorSolution'] = $this->errorSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wizardErrorCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorSolution'])) {
            $model->errorSolution = $map['ErrorSolution'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetApplicationResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of the application.
     *
     * @var data
     */
    public $data;

    /**
     * @description Possible application states:
     *
     *   Creating: The application is being created.
     *   Modified: The application has been modified.
     *   Verifying: The application is being verified.
     *   Verified_Failure: The application failed to pass the verification.
     *   Verified_Success: The application has passed the verification.
     *   Valuating: Fees are being calculated for the application.
     *   Valuating_Failure: Fees failed to be calculated for the application.
     *   Valuating_Success: Fees are calculated for the application.
     *   Deploying: The application is being deployed.
     *   Deployed_Failure: The application failed to be deployed.
     *   Partially_Deployed_Success: Some resources of the application are deployed.
     *   Deployed_Success: The application is deployed.
     *   Destroying: The application is being released.
     *   Delayed_Destroy: The application release is delayed.
     *   Destroyed_Failure: The application failed to be released.
     *   Partially_Destroyed_Success: Some resources of the application are released.
     *   Destroyed_Success: The application is released.
     *   Revised: The application architecture is adjusted.
     *   Verifying_In_Revision: The application resources are being verified during architecture adjustment.
     *   Verified_Failure_In_Revision: The application resources failed to pass the verification during architecture adjustment.
     *   Verified_Success_In_Revision: The application resources are verified during architecture adjustment.
     *   Valuating_In_Revision: Fees are being calculated for the application during architecture adjustment.
     *   Valuating_Failure_In_Revision: Fees failed to be calculated for the application during architecture adjustment.
     *   Valuating_Success_In_Revision: Fees are calculated for the application during architecture adjustment.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the application.
     *
     * @example A07FFDF2-78FA-1B48-9E38-88E833A93187
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

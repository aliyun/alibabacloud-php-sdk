<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetThingTemplateResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The TSL features returned if the call is successful. Format:
     *
     * For more information, see [TSL formats](~~73727~~).
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example { "properties":[],"services":[], "events":[]}
     *
     * @var string
     */
    public $thingModelJSON;
    protected $_name = [
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'thingModelJSON' => 'ThingModelJSON',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->thingModelJSON) {
            $res['ThingModelJSON'] = $this->thingModelJSON;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ThingModelJSON'])) {
            $model->thingModelJSON = $map['ThingModelJSON'];
        }

        return $model;
    }
}

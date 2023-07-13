<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetDestinationResponseBody\destination;
use AlibabaCloud\Tea\Model;

class GetDestinationResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about the data destination.
     *
     * @var destination
     */
    public $destination;

    /**
     * @description The error message returned if the request fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The request ID.
     *
     * @example E4C0FF92-2A86-41DB-92D3-73B60310D25E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'destination'  => 'Destination',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDestinationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Destination'])) {
            $model->destination = destination::fromMap($map['Destination']);
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

        return $model;
    }
}

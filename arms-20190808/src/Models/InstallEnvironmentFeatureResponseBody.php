<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InstallEnvironmentFeatureResponseBody extends Model
{
    /**
     * @description Status code: 200 indicates success.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description ReleaseId after installation.
     *
     * @example 83FCC44C-A056-18AF-A902-7043E723F0D9
     *
     * @var string
     */
    public $data;

    /**
     * @description Prompt message.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 4C518054-852F-4023-ABC1-4AF95FF7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description api was successful:
     *
     * - false: fails.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return InstallEnvironmentFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

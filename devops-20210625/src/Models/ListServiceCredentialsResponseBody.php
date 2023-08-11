<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceCredentialsResponseBody\serviceCredentials;
use AlibabaCloud\Tea\Model;

class ListServiceCredentialsResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceCredentials[]
     */
    public $serviceCredentials;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'          => 'errorCode',
        'errorMessage'       => 'errorMessage',
        'requestId'          => 'requestId',
        'serviceCredentials' => 'serviceCredentials',
        'success'            => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->serviceCredentials) {
            $res['serviceCredentials'] = [];
            if (null !== $this->serviceCredentials && \is_array($this->serviceCredentials)) {
                $n = 0;
                foreach ($this->serviceCredentials as $item) {
                    $res['serviceCredentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceCredentialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['serviceCredentials'])) {
            if (!empty($map['serviceCredentials'])) {
                $model->serviceCredentials = [];
                $n                         = 0;
                foreach ($map['serviceCredentials'] as $item) {
                    $model->serviceCredentials[$n++] = null !== $item ? serviceCredentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}

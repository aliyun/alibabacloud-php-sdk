<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\GetApplicationResponseBody\application;
use AlibabaCloud\Tea\Model;

class GetApplicationResponseBody extends Model
{
    /**
     * @var application
     */
    public $application;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 01CF26C7-00A3-4AA6-BA76-7E95F2A3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ac1a0b2215622920113732501e****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'application' => 'Application',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'traceId'     => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}

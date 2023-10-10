<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationResponseBody\applicationInfo;
use AlibabaCloud\Tea\Model;

class InsertApplicationResponseBody extends Model
{
    /**
     * @description The information about the created application.
     *
     * @var applicationInfo
     */
    public $applicationInfo;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message that is returned.
     *
     * @example The application name test-hsy-C5039-paas-6 had been created successfully.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 4264F69C-686C-4107-B493-0599C8xxxxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationInfo' => 'ApplicationInfo',
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationInfo) {
            $res['ApplicationInfo'] = null !== $this->applicationInfo ? $this->applicationInfo->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return InsertApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationInfo'])) {
            $model->applicationInfo = applicationInfo::fromMap($map['ApplicationInfo']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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

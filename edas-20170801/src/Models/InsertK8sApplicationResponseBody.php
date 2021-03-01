<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\InsertK8sApplicationResponseBody\applicationInfo;
use AlibabaCloud\Tea\Model;

class InsertK8sApplicationResponseBody extends Model
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
     * @var applicationInfo
     */
    public $applicationInfo;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'applicationInfo' => 'ApplicationInfo',
        'code'            => 'Code',
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
        if (null !== $this->applicationInfo) {
            $res['ApplicationInfo'] = null !== $this->applicationInfo ? $this->applicationInfo->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertK8sApplicationResponseBody
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
        if (isset($map['ApplicationInfo'])) {
            $model->applicationInfo = applicationInfo::fromMap($map['ApplicationInfo']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

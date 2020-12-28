<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetUserApplicationsResponseBody\appNameAndIdPairs;
use AlibabaCloud\Tea\Model;

class GetUserApplicationsResponseBody extends Model
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
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var appNameAndIdPairs[]
     */
    public $appNameAndIdPairs;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'httpStatusCode'    => 'HttpStatusCode',
        'appNameAndIdPairs' => 'AppNameAndIdPairs',
        'code'              => 'Code',
        'success'           => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->appNameAndIdPairs) {
            $res['AppNameAndIdPairs'] = [];
            if (null !== $this->appNameAndIdPairs && \is_array($this->appNameAndIdPairs)) {
                $n = 0;
                foreach ($this->appNameAndIdPairs as $item) {
                    $res['AppNameAndIdPairs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserApplicationsResponseBody
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
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['AppNameAndIdPairs'])) {
            if (!empty($map['AppNameAndIdPairs'])) {
                $model->appNameAndIdPairs = [];
                $n                        = 0;
                foreach ($map['AppNameAndIdPairs'] as $item) {
                    $model->appNameAndIdPairs[$n++] = null !== $item ? appNameAndIdPairs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

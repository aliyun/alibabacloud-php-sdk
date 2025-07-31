<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetProjectWhiteListsResponseBody\whiteLists;
use AlibabaCloud\Tea\Model;

class GetProjectWhiteListsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example internal error
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 82E78D6B-AA8F-1FEF-8AA3-5C9DA2A79140
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'whiteLists' => 'WhiteLists',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (null !== $this->whiteLists) {
            $res['WhiteLists'] = [];
            if (null !== $this->whiteLists && \is_array($this->whiteLists)) {
                $n = 0;
                foreach ($this->whiteLists as $item) {
                    $res['WhiteLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectWhiteListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n = 0;
                foreach ($map['WhiteLists'] as $item) {
                    $model->whiteLists[$n++] = null !== $item ? whiteLists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList;
use AlibabaCloud\Tea\Model;

class ListConsumedServicesResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about consumed services.
     *
     * @var consumedServicesList
     */
    public $consumedServicesList;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example a5281053-08e4-47a5-b2ab-5c0323de7b5a
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                 => 'Code',
        'consumedServicesList' => 'ConsumedServicesList',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
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
        if (null !== $this->consumedServicesList) {
            $res['ConsumedServicesList'] = null !== $this->consumedServicesList ? $this->consumedServicesList->toMap() : null;
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
     * @return ListConsumedServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumedServicesList'])) {
            $model->consumedServicesList = consumedServicesList::fromMap($map['ConsumedServicesList']);
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

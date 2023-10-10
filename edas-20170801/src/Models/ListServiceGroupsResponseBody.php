<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList;
use AlibabaCloud\Tea\Model;

class ListServiceGroupsResponseBody extends Model
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

    /**
     * @description The information about service groups.
     *
     * @var serviceGroupsList
     */
    public $serviceGroupsList;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'serviceGroupsList' => 'ServiceGroupsList',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceGroupsList) {
            $res['ServiceGroupsList'] = null !== $this->serviceGroupsList ? $this->serviceGroupsList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceGroupsList'])) {
            $model->serviceGroupsList = serviceGroupsList::fromMap($map['ServiceGroupsList']);
        }

        return $model;
    }
}

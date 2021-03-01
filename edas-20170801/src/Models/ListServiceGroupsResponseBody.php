<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList;
use AlibabaCloud\Tea\Model;

class ListServiceGroupsResponseBody extends Model
{
    /**
     * @var serviceGroupsList
     */
    public $serviceGroupsList;

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
    public $code;
    protected $_name = [
        'serviceGroupsList' => 'ServiceGroupsList',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupsList) {
            $res['ServiceGroupsList'] = null !== $this->serviceGroupsList ? $this->serviceGroupsList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['ServiceGroupsList'])) {
            $model->serviceGroupsList = serviceGroupsList::fromMap($map['ServiceGroupsList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

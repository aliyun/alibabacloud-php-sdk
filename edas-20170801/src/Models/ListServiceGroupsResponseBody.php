<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList;

class ListServiceGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceGroupsList
     */
    public $serviceGroupsList;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'serviceGroupsList' => 'ServiceGroupsList',
    ];

    public function validate()
    {
        if (null !== $this->serviceGroupsList) {
            $this->serviceGroupsList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ServiceGroupsList'] = null !== $this->serviceGroupsList ? $this->serviceGroupsList->toArray($noStream) : $this->serviceGroupsList;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

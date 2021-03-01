<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuResponseBody\instanceList;
use AlibabaCloud\Tea\Model;

class ListConvertableEcuResponseBody extends Model
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
     * @var instanceList
     */
    public $instanceList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'instanceList' => 'InstanceList',
        'code'         => 'Code',
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
        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConvertableEcuResponseBody
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
        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

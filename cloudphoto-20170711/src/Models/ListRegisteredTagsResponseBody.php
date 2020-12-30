<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListRegisteredTagsResponseBody\registeredTags;
use AlibabaCloud\Tea\Model;

class ListRegisteredTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var registeredTags[]
     */
    public $registeredTags;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'         => 'Action',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'registeredTags' => 'RegisteredTags',
        'code'           => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->registeredTags) {
            $res['RegisteredTags'] = [];
            if (null !== $this->registeredTags && \is_array($this->registeredTags)) {
                $n = 0;
                foreach ($this->registeredTags as $item) {
                    $res['RegisteredTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRegisteredTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegisteredTags'])) {
            if (!empty($map['RegisteredTags'])) {
                $model->registeredTags = [];
                $n                     = 0;
                foreach ($map['RegisteredTags'] as $item) {
                    $model->registeredTags[$n++] = null !== $item ? registeredTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

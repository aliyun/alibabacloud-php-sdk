<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListPhotoStoresResponseBody\photoStores;
use AlibabaCloud\Tea\Model;

class ListPhotoStoresResponseBody extends Model
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
     * @var photoStores[]
     */
    public $photoStores;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'      => 'Action',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'photoStores' => 'PhotoStores',
        'code'        => 'Code',
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
        if (null !== $this->photoStores) {
            $res['PhotoStores'] = [];
            if (null !== $this->photoStores && \is_array($this->photoStores)) {
                $n = 0;
                foreach ($this->photoStores as $item) {
                    $res['PhotoStores'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPhotoStoresResponseBody
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
        if (isset($map['PhotoStores'])) {
            if (!empty($map['PhotoStores'])) {
                $model->photoStores = [];
                $n                  = 0;
                foreach ($map['PhotoStores'] as $item) {
                    $model->photoStores[$n++] = null !== $item ? photoStores::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

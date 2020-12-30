<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotoStoreResponseBody\photoStore;
use AlibabaCloud\Tea\Model;

class GetPhotoStoreResponseBody extends Model
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
     * @var photoStore
     */
    public $photoStore;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'     => 'Action',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'photoStore' => 'PhotoStore',
        'code'       => 'Code',
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
        if (null !== $this->photoStore) {
            $res['PhotoStore'] = null !== $this->photoStore ? $this->photoStore->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhotoStoreResponseBody
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
        if (isset($map['PhotoStore'])) {
            $model->photoStore = photoStore::fromMap($map['PhotoStore']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

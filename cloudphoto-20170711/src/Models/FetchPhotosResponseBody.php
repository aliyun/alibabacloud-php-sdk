<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchPhotosResponseBody\photos;
use AlibabaCloud\Tea\Model;

class FetchPhotosResponseBody extends Model
{
    /**
     * @var photos[]
     */
    public $photos;

    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'photos'     => 'Photos',
        'action'     => 'Action',
        'totalCount' => 'TotalCount',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->photos) {
            $res['Photos'] = [];
            if (null !== $this->photos && \is_array($this->photos)) {
                $n = 0;
                foreach ($this->photos as $item) {
                    $res['Photos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
     * @return FetchPhotosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Photos'])) {
            if (!empty($map['Photos'])) {
                $model->photos = [];
                $n             = 0;
                foreach ($map['Photos'] as $item) {
                    $model->photos[$n++] = null !== $item ? photos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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

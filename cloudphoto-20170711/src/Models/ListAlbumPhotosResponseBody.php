<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListAlbumPhotosResponseBody\results;
use AlibabaCloud\Tea\Model;

class ListAlbumPhotosResponseBody extends Model
{
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
    public $nextCursor;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'     => 'Action',
        'totalCount' => 'TotalCount',
        'nextCursor' => 'NextCursor',
        'requestId'  => 'RequestId',
        'message'    => 'Message',
        'results'    => 'Results',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAlbumPhotosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

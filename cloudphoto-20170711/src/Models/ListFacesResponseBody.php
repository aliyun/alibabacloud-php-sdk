<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesResponseBody\faces;
use AlibabaCloud\Tea\Model;

class ListFacesResponseBody extends Model
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
     * @var string
     */
    public $code;

    /**
     * @var faces[]
     */
    public $faces;
    protected $_name = [
        'action'     => 'Action',
        'totalCount' => 'TotalCount',
        'nextCursor' => 'NextCursor',
        'requestId'  => 'RequestId',
        'message'    => 'Message',
        'code'       => 'Code',
        'faces'      => 'Faces',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->faces) {
            $res['Faces'] = [];
            if (null !== $this->faces && \is_array($this->faces)) {
                $n = 0;
                foreach ($this->faces as $item) {
                    $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFacesResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? faces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

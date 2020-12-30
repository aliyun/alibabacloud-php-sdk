<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\FetchLibrariesResponseBody\libraries;
use AlibabaCloud\Tea\Model;

class FetchLibrariesResponseBody extends Model
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
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var libraries[]
     */
    public $libraries;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'     => 'Action',
        'totalCount' => 'TotalCount',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'libraries'  => 'Libraries',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->libraries) {
            $res['Libraries'] = [];
            if (null !== $this->libraries && \is_array($this->libraries)) {
                $n = 0;
                foreach ($this->libraries as $item) {
                    $res['Libraries'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return FetchLibrariesResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Libraries'])) {
            if (!empty($map['Libraries'])) {
                $model->libraries = [];
                $n                = 0;
                foreach ($map['Libraries'] as $item) {
                    $model->libraries[$n++] = null !== $item ? libraries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetHitCountResponseBody\hits;
use AlibabaCloud\Tea\Model;

class GetHitCountResponseBody extends Model
{
    /**
     * @var hits[]
     */
    public $hits;

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

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'hits'      => 'Hits',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hits) {
            $res['Hits'] = [];
            if (null !== $this->hits && \is_array($this->hits)) {
                $n = 0;
                foreach ($this->hits as $item) {
                    $res['Hits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHitCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hits'])) {
            if (!empty($map['Hits'])) {
                $model->hits = [];
                $n           = 0;
                foreach ($map['Hits'] as $item) {
                    $model->hits[$n++] = null !== $item ? hits::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

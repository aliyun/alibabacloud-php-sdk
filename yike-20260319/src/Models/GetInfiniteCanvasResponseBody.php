<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetInfiniteCanvasResponseBody\infiniteCanvas;

class GetInfiniteCanvasResponseBody extends Model
{
    /**
     * @var infiniteCanvas
     */
    public $infiniteCanvas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'infiniteCanvas' => 'InfiniteCanvas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->infiniteCanvas) {
            $this->infiniteCanvas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infiniteCanvas) {
            $res['InfiniteCanvas'] = null !== $this->infiniteCanvas ? $this->infiniteCanvas->toArray($noStream) : $this->infiniteCanvas;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InfiniteCanvas'])) {
            $model->infiniteCanvas = infiniteCanvas::fromMap($map['InfiniteCanvas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

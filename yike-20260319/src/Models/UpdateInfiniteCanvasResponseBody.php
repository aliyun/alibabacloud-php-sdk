<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class UpdateInfiniteCanvasResponseBody extends Model
{
    /**
     * @var string
     */
    public $canvasId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canvasId' => 'CanvasId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canvasId) {
            $res['CanvasId'] = $this->canvasId;
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
        if (isset($map['CanvasId'])) {
            $model->canvasId = $map['CanvasId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

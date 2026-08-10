<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class DeleteInfiniteCanvasRequest extends Model
{
    /**
     * @var string
     */
    public $canvasId;
    protected $_name = [
        'canvasId' => 'CanvasId',
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

        return $model;
    }
}

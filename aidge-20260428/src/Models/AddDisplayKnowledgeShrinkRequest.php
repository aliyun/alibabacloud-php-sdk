<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class AddDisplayKnowledgeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ragId;

    /**
     * @var string
     */
    public $recordsShrink;
    protected $_name = [
        'ragId' => 'RagId',
        'recordsShrink' => 'Records',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ragId) {
            $res['RagId'] = $this->ragId;
        }

        if (null !== $this->recordsShrink) {
            $res['Records'] = $this->recordsShrink;
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
        if (isset($map['RagId'])) {
            $model->ragId = $map['RagId'];
        }

        if (isset($map['Records'])) {
            $model->recordsShrink = $map['Records'];
        }

        return $model;
    }
}

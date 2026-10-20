<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class DeleteDisplayKnowledgeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ragId;

    /**
     * @var string
     */
    public $recordIdsShrink;
    protected $_name = [
        'ragId' => 'RagId',
        'recordIdsShrink' => 'RecordIds',
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

        if (null !== $this->recordIdsShrink) {
            $res['RecordIds'] = $this->recordIdsShrink;
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

        if (isset($map['RecordIds'])) {
            $model->recordIdsShrink = $map['RecordIds'];
        }

        return $model;
    }
}

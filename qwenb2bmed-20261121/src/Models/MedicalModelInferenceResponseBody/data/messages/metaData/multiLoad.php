<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261121\Models\MedicalModelInferenceResponseBody\data\messages\metaData;

use AlibabaCloud\Dara\Model;

class multiLoad extends Model
{
    /**
     * @var mixed
     */
    public $content;

    /**
     * @var string
     */
    public $sourceSeq;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'content',
        'sourceSeq' => 'sourceSeq',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->sourceSeq) {
            $res['sourceSeq'] = $this->sourceSeq;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['sourceSeq'])) {
            $model->sourceSeq = $map['sourceSeq'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

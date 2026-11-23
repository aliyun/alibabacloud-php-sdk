<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response\data\messages\metaData;

use AlibabaCloud\Dara\Model;

class multiLoad extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $sourceSeq;

    /**
     * @var mixed
     */
    public $content;
    protected $_name = [
        'type' => 'type',
        'sourceSeq' => 'sourceSeq',
        'content' => 'content',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->sourceSeq) {
            $res['sourceSeq'] = $this->sourceSeq;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['sourceSeq'])) {
            $model->sourceSeq = $map['sourceSeq'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        return $model;
    }
}

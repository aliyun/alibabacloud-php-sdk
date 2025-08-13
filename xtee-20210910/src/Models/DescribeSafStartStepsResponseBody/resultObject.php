<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartStepsResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'content',
        'id' => 'id',
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

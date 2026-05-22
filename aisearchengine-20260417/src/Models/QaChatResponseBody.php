<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\QaChatResponseBody\data;

class QaChatResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'data' => 'data',
        'event' => 'event',
        'id' => 'id',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}

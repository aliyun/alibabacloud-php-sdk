<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CheckServiceRoleResponseBody;

use AlibabaCloud\Dara\Model;

class roles extends Model
{
    /**
     * @var bool
     */
    public $granted;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'granted' => 'granted',
        'message' => 'message',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granted) {
            $res['granted'] = $this->granted;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['granted'])) {
            $model->granted = $map['granted'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateMachineGroupMachineRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string[]
     */
    public $body;
    protected $_name = [
        'action' => 'action',
        'body' => 'body',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                $n1 = 0;
                foreach ($this->body as $item1) {
                    $res['body'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n1 = 0;
                foreach ($map['body'] as $item1) {
                    $model->body[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

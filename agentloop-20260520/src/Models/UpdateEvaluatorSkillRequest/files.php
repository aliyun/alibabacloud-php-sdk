<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateEvaluatorSkillRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'content' => 'content',
        'name' => 'name',
        'remark' => 'remark',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}

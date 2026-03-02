<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AbbrevMonitorAlertRule extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $triggerContent;

    /**
     * @var string
     */
    public $triggerRule;
    protected $_name = [
        'createTime' => 'createTime',
        'id' => 'id',
        'name' => 'name',
        'triggerContent' => 'triggerContent',
        'triggerRule' => 'triggerRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->triggerContent) {
            $res['triggerContent'] = $this->triggerContent;
        }

        if (null !== $this->triggerRule) {
            $res['triggerRule'] = $this->triggerRule;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['triggerContent'])) {
            $model->triggerContent = $map['triggerContent'];
        }

        if (isset($map['triggerRule'])) {
            $model->triggerRule = $map['triggerRule'];
        }

        return $model;
    }
}

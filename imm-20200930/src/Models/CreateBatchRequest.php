<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchRequest\actions;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateBatchRequest\notification;

class CreateBatchRequest extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var Input
     */
    public $input;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $serviceRole;

    /**
     * @var mixed[]
     */
    public $tags;
    protected $_name = [
        'actions' => 'Actions',
        'input' => 'Input',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'serviceRole' => 'ServiceRole',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['Actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->serviceRole) {
            $res['ServiceRole'] = $this->serviceRole;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
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
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1++] = actions::fromMap($item1);
                }
            }
        }

        if (isset($map['Input'])) {
            $model->input = Input::fromMap($map['Input']);
        }

        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ServiceRole'])) {
            $model->serviceRole = $map['ServiceRole'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

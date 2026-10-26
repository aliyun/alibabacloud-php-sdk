<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponseBody\config;

use AlibabaCloud\Dara\Model;

class resourceScope extends Model
{
    /**
     * @var string[]
     */
    public $consumerGroups;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'consumerGroups' => 'consumerGroups',
        'mode' => 'mode',
        'topics' => 'topics',
    ];

    public function validate()
    {
        if (\is_array($this->consumerGroups)) {
            Model::validateArray($this->consumerGroups);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroups) {
            if (\is_array($this->consumerGroups)) {
                $res['consumerGroups'] = [];
                $n1 = 0;
                foreach ($this->consumerGroups as $item1) {
                    $res['consumerGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['topics'][$n1] = $item1;
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
        if (isset($map['consumerGroups'])) {
            if (!empty($map['consumerGroups'])) {
                $model->consumerGroups = [];
                $n1 = 0;
                foreach ($map['consumerGroups'] as $item1) {
                    $model->consumerGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

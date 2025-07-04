<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterInspectConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $disabledCheckItems;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $recurrence;
    protected $_name = [
        'disabledCheckItems' => 'disabledCheckItems',
        'enabled' => 'enabled',
        'recurrence' => 'recurrence',
    ];

    public function validate()
    {
        if (\is_array($this->disabledCheckItems)) {
            Model::validateArray($this->disabledCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disabledCheckItems) {
            if (\is_array($this->disabledCheckItems)) {
                $res['disabledCheckItems'] = [];
                $n1 = 0;
                foreach ($this->disabledCheckItems as $item1) {
                    $res['disabledCheckItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->recurrence) {
            $res['recurrence'] = $this->recurrence;
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
        if (isset($map['disabledCheckItems'])) {
            if (!empty($map['disabledCheckItems'])) {
                $model->disabledCheckItems = [];
                $n1 = 0;
                foreach ($map['disabledCheckItems'] as $item1) {
                    $model->disabledCheckItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['recurrence'])) {
            $model->recurrence = $map['recurrence'];
        }

        return $model;
    }
}

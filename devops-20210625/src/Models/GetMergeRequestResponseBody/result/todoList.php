<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\todoList\requirementCheckItems;

class todoList extends Model
{
    /**
     * @var requirementCheckItems[]
     */
    public $requirementCheckItems;
    protected $_name = [
        'requirementCheckItems' => 'requirementCheckItems',
    ];

    public function validate()
    {
        if (\is_array($this->requirementCheckItems)) {
            Model::validateArray($this->requirementCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requirementCheckItems) {
            if (\is_array($this->requirementCheckItems)) {
                $res['requirementCheckItems'] = [];
                $n1 = 0;
                foreach ($this->requirementCheckItems as $item1) {
                    $res['requirementCheckItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requirementCheckItems'])) {
            if (!empty($map['requirementCheckItems'])) {
                $model->requirementCheckItems = [];
                $n1 = 0;
                foreach ($map['requirementCheckItems'] as $item1) {
                    $model->requirementCheckItems[$n1] = requirementCheckItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

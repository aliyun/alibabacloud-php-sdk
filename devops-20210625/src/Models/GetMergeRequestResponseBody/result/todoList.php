<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponseBody\result\todoList\requirementCheckItems;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requirementCheckItems) {
            $res['requirementCheckItems'] = [];
            if (null !== $this->requirementCheckItems && \is_array($this->requirementCheckItems)) {
                $n = 0;
                foreach ($this->requirementCheckItems as $item) {
                    $res['requirementCheckItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return todoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requirementCheckItems'])) {
            if (!empty($map['requirementCheckItems'])) {
                $model->requirementCheckItems = [];
                $n                            = 0;
                foreach ($map['requirementCheckItems'] as $item) {
                    $model->requirementCheckItems[$n++] = null !== $item ? requirementCheckItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ListTasksRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelSelector;
    protected $_name = [
        'labelSelector' => 'labelSelector',
    ];

    public function validate()
    {
        if (\is_array($this->labelSelector)) {
            Model::validateArray($this->labelSelector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelSelector) {
            if (\is_array($this->labelSelector)) {
                $res['labelSelector'] = [];
                $n1 = 0;
                foreach ($this->labelSelector as $item1) {
                    $res['labelSelector'][$n1++] = $item1;
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
        if (isset($map['labelSelector'])) {
            if (!empty($map['labelSelector'])) {
                $model->labelSelector = [];
                $n1 = 0;
                foreach ($map['labelSelector'] as $item1) {
                    $model->labelSelector[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}

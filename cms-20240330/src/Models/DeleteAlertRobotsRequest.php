<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertRobotsRequest extends Model
{
    /**
     * @var string[]
     */
    public $robotIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'robotIds' => 'robotIds',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->robotIds)) {
            Model::validateArray($this->robotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->robotIds) {
            if (\is_array($this->robotIds)) {
                $res['robotIds'] = [];
                $n1 = 0;
                foreach ($this->robotIds as $item1) {
                    $res['robotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['robotIds'])) {
            if (!empty($map['robotIds'])) {
                $model->robotIds = [];
                $n1 = 0;
                foreach ($map['robotIds'] as $item1) {
                    $model->robotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

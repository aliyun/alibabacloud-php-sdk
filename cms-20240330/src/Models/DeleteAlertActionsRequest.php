<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertActionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $alertActionIds;
    protected $_name = [
        'alertActionIds' => 'alertActionIds',
    ];

    public function validate()
    {
        if (\is_array($this->alertActionIds)) {
            Model::validateArray($this->alertActionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertActionIds) {
            if (\is_array($this->alertActionIds)) {
                $res['alertActionIds'] = [];
                $n1 = 0;
                foreach ($this->alertActionIds as $item1) {
                    $res['alertActionIds'][$n1] = $item1;
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
        if (isset($map['alertActionIds'])) {
            if (!empty($map['alertActionIds'])) {
                $model->alertActionIds = [];
                $n1 = 0;
                foreach ($map['alertActionIds'] as $item1) {
                    $model->alertActionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

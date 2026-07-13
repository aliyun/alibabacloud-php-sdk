<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ResumeAgentTaskRequest;

use AlibabaCloud\Dara\Model;

class clarificationAnswers extends Model
{
    /**
     * @var string
     */
    public $customValue;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $selectedIds;
    protected $_name = [
        'customValue' => 'CustomValue',
        'id' => 'Id',
        'selectedIds' => 'SelectedIds',
    ];

    public function validate()
    {
        if (\is_array($this->selectedIds)) {
            Model::validateArray($this->selectedIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customValue) {
            $res['CustomValue'] = $this->customValue;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->selectedIds) {
            if (\is_array($this->selectedIds)) {
                $res['SelectedIds'] = [];
                $n1 = 0;
                foreach ($this->selectedIds as $item1) {
                    $res['SelectedIds'][$n1] = $item1;
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
        if (isset($map['CustomValue'])) {
            $model->customValue = $map['CustomValue'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SelectedIds'])) {
            if (!empty($map['SelectedIds'])) {
                $model->selectedIds = [];
                $n1 = 0;
                foreach ($map['SelectedIds'] as $item1) {
                    $model->selectedIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

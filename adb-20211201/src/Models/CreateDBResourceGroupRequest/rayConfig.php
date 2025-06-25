<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest\rayConfig\workerGroups;

class rayConfig extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $headSpec;

    /**
     * @var workerGroups[]
     */
    public $workerGroups;
    protected $_name = [
        'category' => 'Category',
        'headSpec' => 'HeadSpec',
        'workerGroups' => 'WorkerGroups',
    ];

    public function validate()
    {
        if (\is_array($this->workerGroups)) {
            Model::validateArray($this->workerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->headSpec) {
            $res['HeadSpec'] = $this->headSpec;
        }

        if (null !== $this->workerGroups) {
            if (\is_array($this->workerGroups)) {
                $res['WorkerGroups'] = [];
                $n1 = 0;
                foreach ($this->workerGroups as $item1) {
                    $res['WorkerGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['HeadSpec'])) {
            $model->headSpec = $map['HeadSpec'];
        }

        if (isset($map['WorkerGroups'])) {
            if (!empty($map['WorkerGroups'])) {
                $model->workerGroups = [];
                $n1 = 0;
                foreach ($map['WorkerGroups'] as $item1) {
                    $model->workerGroups[$n1] = workerGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

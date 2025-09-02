<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data\DISyncTasks;

class data extends Model
{
    /**
     * @var DISyncTasks[]
     */
    public $DISyncTasks;
    protected $_name = [
        'DISyncTasks' => 'DISyncTasks',
    ];

    public function validate()
    {
        if (\is_array($this->DISyncTasks)) {
            Model::validateArray($this->DISyncTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DISyncTasks) {
            if (\is_array($this->DISyncTasks)) {
                $res['DISyncTasks'] = [];
                $n1 = 0;
                foreach ($this->DISyncTasks as $item1) {
                    $res['DISyncTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DISyncTasks'])) {
            if (!empty($map['DISyncTasks'])) {
                $model->DISyncTasks = [];
                $n1 = 0;
                foreach ($map['DISyncTasks'] as $item1) {
                    $model->DISyncTasks[$n1] = DISyncTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

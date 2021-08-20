<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponse\data\DISyncTasks;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('DISyncTasks', $this->DISyncTasks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DISyncTasks) {
            $res['DISyncTasks'] = [];
            if (null !== $this->DISyncTasks && \is_array($this->DISyncTasks)) {
                $n = 0;
                foreach ($this->DISyncTasks as $item) {
                    $res['DISyncTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DISyncTasks'])) {
            if (!empty($map['DISyncTasks'])) {
                $model->DISyncTasks = [];
                $n                  = 0;
                foreach ($map['DISyncTasks'] as $item) {
                    $model->DISyncTasks[$n++] = null !== $item ? DISyncTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

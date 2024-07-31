<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRefDISyncTasksResponseBody\data\DISyncTasks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the synchronization tasks. In most cases, a data source is used by multiple synchronization tasks. Therefore, the value of this parameter is an array. The following parameters are the elements in the array. The sample values of these parameters show the details of a synchronization task.
     *
     * @var DISyncTasks[]
     */
    public $DISyncTasks;
    protected $_name = [
        'DISyncTasks' => 'DISyncTasks',
    ];

    public function validate()
    {
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

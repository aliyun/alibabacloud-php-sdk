<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataExportTasksResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataExportTasksResponseBody\data\dataExportTask;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataExportTask[]
     */
    public $dataExportTask;
    protected $_name = [
        'dataExportTask' => 'DataExportTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataExportTask) {
            $res['DataExportTask'] = [];
            if (null !== $this->dataExportTask && \is_array($this->dataExportTask)) {
                $n = 0;
                foreach ($this->dataExportTask as $item) {
                    $res['DataExportTask'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataExportTask'])) {
            if (!empty($map['DataExportTask'])) {
                $model->dataExportTask = [];
                $n                     = 0;
                foreach ($map['DataExportTask'] as $item) {
                    $model->dataExportTask[$n++] = null !== $item ? dataExportTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody\data\dataImportTask;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataImportTask[]
     */
    public $dataImportTask;
    protected $_name = [
        'dataImportTask' => 'DataImportTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataImportTask) {
            $res['DataImportTask'] = [];
            if (null !== $this->dataImportTask && \is_array($this->dataImportTask)) {
                $n = 0;
                foreach ($this->dataImportTask as $item) {
                    $res['DataImportTask'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataImportTask'])) {
            if (!empty($map['DataImportTask'])) {
                $model->dataImportTask = [];
                $n                     = 0;
                foreach ($map['DataImportTask'] as $item) {
                    $model->dataImportTask[$n++] = null !== $item ? dataImportTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

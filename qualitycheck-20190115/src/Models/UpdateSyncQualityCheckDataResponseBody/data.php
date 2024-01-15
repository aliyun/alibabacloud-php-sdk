<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UpdateSyncQualityCheckDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123123D8C-5BD9-42A7-B527-1235F8**
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 20210101-1212121***
     *
     * @var string
     */
    public $tid;
    protected $_name = [
        'taskId' => 'TaskId',
        'tid'    => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}

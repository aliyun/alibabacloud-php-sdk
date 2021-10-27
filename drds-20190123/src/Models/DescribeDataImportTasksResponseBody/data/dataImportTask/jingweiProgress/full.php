<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody\data\dataImportTask\jingweiProgress;

use AlibabaCloud\Tea\Model;

class full extends Model
{
    /**
     * @var int
     */
    public $needTime;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $tps;

    /**
     * @var int
     */
    public $transferCount;
    protected $_name = [
        'needTime'      => 'NeedTime',
        'progress'      => 'Progress',
        'tps'           => 'Tps',
        'transferCount' => 'TransferCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needTime) {
            $res['NeedTime'] = $this->needTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }
        if (null !== $this->transferCount) {
            $res['TransferCount'] = $this->transferCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return full
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedTime'])) {
            $model->needTime = $map['NeedTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }
        if (isset($map['TransferCount'])) {
            $model->transferCount = $map['TransferCount'];
        }

        return $model;
    }
}

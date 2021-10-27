<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody\data\dataImportTask\jingweiProgress;

use AlibabaCloud\Tea\Model;

class increment extends Model
{
    /**
     * @var int
     */
    public $delay;

    /**
     * @var int
     */
    public $tps;

    /**
     * @var int
     */
    public $transferCount;
    protected $_name = [
        'delay'         => 'Delay',
        'tps'           => 'Tps',
        'transferCount' => 'TransferCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
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
     * @return increment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
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

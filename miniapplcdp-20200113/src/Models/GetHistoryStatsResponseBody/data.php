<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetHistoryStatsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $historyPv;

    /**
     * @var string[]
     */
    public $historyUv;
    protected $_name = [
        'historyPv' => 'HistoryPv',
        'historyUv' => 'HistoryUv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historyPv) {
            $res['HistoryPv'] = $this->historyPv;
        }
        if (null !== $this->historyUv) {
            $res['HistoryUv'] = $this->historyUv;
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
        if (isset($map['HistoryPv'])) {
            $model->historyPv = $map['HistoryPv'];
        }
        if (isset($map['HistoryUv'])) {
            $model->historyUv = $map['HistoryUv'];
        }

        return $model;
    }
}

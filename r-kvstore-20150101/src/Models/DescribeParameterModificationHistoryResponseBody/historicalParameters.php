<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters\historicalParameter;
use AlibabaCloud\Tea\Model;

class historicalParameters extends Model
{
    /**
     * @var historicalParameter[]
     */
    public $historicalParameter;
    protected $_name = [
        'historicalParameter' => 'HistoricalParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historicalParameter) {
            $res['HistoricalParameter'] = [];
            if (null !== $this->historicalParameter && \is_array($this->historicalParameter)) {
                $n = 0;
                foreach ($this->historicalParameter as $item) {
                    $res['HistoricalParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historicalParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoricalParameter'])) {
            if (!empty($map['HistoricalParameter'])) {
                $model->historicalParameter = [];
                $n                          = 0;
                foreach ($map['HistoricalParameter'] as $item) {
                    $model->historicalParameter[$n++] = null !== $item ? historicalParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

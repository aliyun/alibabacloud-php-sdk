<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters\historicalParameter;

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
        if (\is_array($this->historicalParameter)) {
            Model::validateArray($this->historicalParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historicalParameter) {
            if (\is_array($this->historicalParameter)) {
                $res['HistoricalParameter'] = [];
                $n1 = 0;
                foreach ($this->historicalParameter as $item1) {
                    $res['HistoricalParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HistoricalParameter'])) {
            if (!empty($map['HistoricalParameter'])) {
                $model->historicalParameter = [];
                $n1 = 0;
                foreach ($map['HistoricalParameter'] as $item1) {
                    $model->historicalParameter[$n1] = historicalParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

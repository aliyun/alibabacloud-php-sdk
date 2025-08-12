<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints\datapoint;

class datapoints extends Model
{
    /**
     * @var datapoint[]
     */
    public $datapoint;
    protected $_name = [
        'datapoint' => 'Datapoint',
    ];

    public function validate()
    {
        if (\is_array($this->datapoint)) {
            Model::validateArray($this->datapoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datapoint) {
            if (\is_array($this->datapoint)) {
                $res['Datapoint'] = [];
                $n1 = 0;
                foreach ($this->datapoint as $item1) {
                    $res['Datapoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Datapoint'])) {
            if (!empty($map['Datapoint'])) {
                $model->datapoint = [];
                $n1 = 0;
                foreach ($map['Datapoint'] as $item1) {
                    $model->datapoint[$n1] = datapoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

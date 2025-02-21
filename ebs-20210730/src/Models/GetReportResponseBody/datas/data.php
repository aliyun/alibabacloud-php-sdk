<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponseBody\datas;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $dataPoints;
    /**
     * @var mixed[]
     */
    public $labels;
    protected $_name = [
        'dataPoints' => 'DataPoints',
        'labels'     => 'Labels',
    ];

    public function validate()
    {
        if (\is_array($this->dataPoints)) {
            Model::validateArray($this->dataPoints);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPoints) {
            if (\is_array($this->dataPoints)) {
                $res['DataPoints'] = [];
                foreach ($this->dataPoints as $key1 => $value1) {
                    $res['DataPoints'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
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
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                foreach ($map['DataPoints'] as $key1 => $value1) {
                    $model->dataPoints[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

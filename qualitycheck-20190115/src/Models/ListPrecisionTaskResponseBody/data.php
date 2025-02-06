<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data\precisionTask;

class data extends Model
{
    /**
     * @var precisionTask[]
     */
    public $precisionTask;
    protected $_name = [
        'precisionTask' => 'PrecisionTask',
    ];

    public function validate()
    {
        if (\is_array($this->precisionTask)) {
            Model::validateArray($this->precisionTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->precisionTask) {
            if (\is_array($this->precisionTask)) {
                $res['PrecisionTask'] = [];
                $n1                   = 0;
                foreach ($this->precisionTask as $item1) {
                    $res['PrecisionTask'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrecisionTask'])) {
            if (!empty($map['PrecisionTask'])) {
                $model->precisionTask = [];
                $n1                   = 0;
                foreach ($map['PrecisionTask'] as $item1) {
                    $model->precisionTask[$n1++] = precisionTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

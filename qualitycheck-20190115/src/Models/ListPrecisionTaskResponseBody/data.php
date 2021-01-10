<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListPrecisionTaskResponseBody\data\precisionTask;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->precisionTask) {
            $res['PrecisionTask'] = [];
            if (null !== $this->precisionTask && \is_array($this->precisionTask)) {
                $n = 0;
                foreach ($this->precisionTask as $item) {
                    $res['PrecisionTask'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PrecisionTask'])) {
            if (!empty($map['PrecisionTask'])) {
                $model->precisionTask = [];
                $n                    = 0;
                foreach ($map['PrecisionTask'] as $item) {
                    $model->precisionTask[$n++] = null !== $item ? precisionTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

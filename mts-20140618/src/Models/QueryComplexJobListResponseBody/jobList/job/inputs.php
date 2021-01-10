<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\inputs\inputs;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @var inputs[]
     */
    public $inputs;
    protected $_name = [
        'inputs' => 'Inputs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputs) {
            $res['Inputs'] = [];
            if (null !== $this->inputs && \is_array($this->inputs)) {
                $n = 0;
                foreach ($this->inputs as $item) {
                    $res['Inputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n             = 0;
                foreach ($map['Inputs'] as $item) {
                    $model->inputs[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

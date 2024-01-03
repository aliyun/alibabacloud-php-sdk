<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskWorkforceRequest extends Model
{
    /**
     * @var SimpleWorkforce[]
     */
    public $workforce;
    protected $_name = [
        'workforce' => 'Workforce',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workforce) {
            $res['Workforce'] = [];
            if (null !== $this->workforce && \is_array($this->workforce)) {
                $n = 0;
                foreach ($this->workforce as $item) {
                    $res['Workforce'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskWorkforceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Workforce'])) {
            if (!empty($map['Workforce'])) {
                $model->workforce = [];
                $n                = 0;
                foreach ($map['Workforce'] as $item) {
                    $model->workforce[$n++] = null !== $item ? SimpleWorkforce::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

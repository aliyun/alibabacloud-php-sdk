<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppQuotaResponseBody\result\limiterInfo\limiters;
use AlibabaCloud\Tea\Model;

class limiterInfo extends Model
{
    /**
     * @var limiters[]
     */
    public $limiters;
    protected $_name = [
        'limiters' => 'limiters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limiters) {
            $res['limiters'] = [];
            if (null !== $this->limiters && \is_array($this->limiters)) {
                $n = 0;
                foreach ($this->limiters as $item) {
                    $res['limiters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return limiterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limiters'])) {
            if (!empty($map['limiters'])) {
                $model->limiters = [];
                $n               = 0;
                foreach ($map['limiters'] as $item) {
                    $model->limiters[$n++] = null !== $item ? limiters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

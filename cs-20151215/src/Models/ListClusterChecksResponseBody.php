<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponseBody\checks;
use AlibabaCloud\Tea\Model;

class ListClusterChecksResponseBody extends Model
{
    /**
     * @var checks[]
     */
    public $checks;
    protected $_name = [
        'checks' => 'checks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checks) {
            $res['checks'] = [];
            if (null !== $this->checks && \is_array($this->checks)) {
                $n = 0;
                foreach ($this->checks as $item) {
                    $res['checks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterChecksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checks'])) {
            if (!empty($map['checks'])) {
                $model->checks = [];
                $n             = 0;
                foreach ($map['checks'] as $item) {
                    $model->checks[$n++] = null !== $item ? checks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

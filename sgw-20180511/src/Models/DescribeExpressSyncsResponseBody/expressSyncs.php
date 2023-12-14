<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncsResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncsResponseBody\expressSyncs\expressSync;
use AlibabaCloud\Tea\Model;

class expressSyncs extends Model
{
    /**
     * @var expressSync[]
     */
    public $expressSync;
    protected $_name = [
        'expressSync' => 'ExpressSync',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressSync) {
            $res['ExpressSync'] = [];
            if (null !== $this->expressSync && \is_array($this->expressSync)) {
                $n = 0;
                foreach ($this->expressSync as $item) {
                    $res['ExpressSync'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressSyncs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressSync'])) {
            if (!empty($map['ExpressSync'])) {
                $model->expressSync = [];
                $n                  = 0;
                foreach ($map['ExpressSync'] as $item) {
                    $model->expressSync[$n++] = null !== $item ? expressSync::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

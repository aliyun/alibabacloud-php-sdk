<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody\rdsDrdsDbs\rdsDrdsDb;
use AlibabaCloud\Tea\Model;

class rdsDrdsDbs extends Model
{
    /**
     * @var rdsDrdsDb[]
     */
    public $rdsDrdsDb;
    protected $_name = [
        'rdsDrdsDb' => 'RdsDrdsDb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsDrdsDb) {
            $res['RdsDrdsDb'] = [];
            if (null !== $this->rdsDrdsDb && \is_array($this->rdsDrdsDb)) {
                $n = 0;
                foreach ($this->rdsDrdsDb as $item) {
                    $res['RdsDrdsDb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsDrdsDbs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsDrdsDb'])) {
            if (!empty($map['RdsDrdsDb'])) {
                $model->rdsDrdsDb = [];
                $n                = 0;
                foreach ($map['RdsDrdsDb'] as $item) {
                    $model->rdsDrdsDb[$n++] = null !== $item ? rdsDrdsDb::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

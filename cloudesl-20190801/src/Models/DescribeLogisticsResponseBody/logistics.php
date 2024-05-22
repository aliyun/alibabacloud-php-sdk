<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeLogisticsResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeLogisticsResponseBody\logistics\logisticsInfo;
use AlibabaCloud\Tea\Model;

class logistics extends Model
{
    /**
     * @var logisticsInfo[]
     */
    public $logisticsInfo;
    protected $_name = [
        'logisticsInfo' => 'LogisticsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsInfo) {
            $res['LogisticsInfo'] = [];
            if (null !== $this->logisticsInfo && \is_array($this->logisticsInfo)) {
                $n = 0;
                foreach ($this->logisticsInfo as $item) {
                    $res['LogisticsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogisticsInfo'])) {
            if (!empty($map['LogisticsInfo'])) {
                $model->logisticsInfo = [];
                $n                    = 0;
                foreach ($map['LogisticsInfo'] as $item) {
                    $model->logisticsInfo[$n++] = null !== $item ? logisticsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

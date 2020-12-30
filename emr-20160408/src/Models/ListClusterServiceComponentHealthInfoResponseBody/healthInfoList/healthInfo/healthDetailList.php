<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo\healthDetailList\healthDetail;
use AlibabaCloud\Tea\Model;

class healthDetailList extends Model
{
    /**
     * @var healthDetail[]
     */
    public $healthDetail;
    protected $_name = [
        'healthDetail' => 'HealthDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthDetail) {
            $res['HealthDetail'] = [];
            if (null !== $this->healthDetail && \is_array($this->healthDetail)) {
                $n = 0;
                foreach ($this->healthDetail as $item) {
                    $res['HealthDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthDetail'])) {
            if (!empty($map['HealthDetail'])) {
                $model->healthDetail = [];
                $n                   = 0;
                foreach ($map['HealthDetail'] as $item) {
                    $model->healthDetail[$n++] = null !== $item ? healthDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

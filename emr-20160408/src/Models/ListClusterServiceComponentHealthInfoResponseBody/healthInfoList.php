<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponseBody\healthInfoList\healthInfo;
use AlibabaCloud\Tea\Model;

class healthInfoList extends Model
{
    /**
     * @var healthInfo[]
     */
    public $healthInfo;
    protected $_name = [
        'healthInfo' => 'HealthInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthInfo) {
            $res['HealthInfo'] = [];
            if (null !== $this->healthInfo && \is_array($this->healthInfo)) {
                $n = 0;
                foreach ($this->healthInfo as $item) {
                    $res['HealthInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthInfo'])) {
            if (!empty($map['HealthInfo'])) {
                $model->healthInfo = [];
                $n                 = 0;
                foreach ($map['HealthInfo'] as $item) {
                    $model->healthInfo[$n++] = null !== $item ? healthInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

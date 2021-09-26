<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo\upgradeServiceDetailInfoVO;
use AlibabaCloud\Tea\Model;

class upgradeServiceDetailInfo extends Model
{
    /**
     * @var upgradeServiceDetailInfoVO[]
     */
    public $upgradeServiceDetailInfoVO;
    protected $_name = [
        'upgradeServiceDetailInfoVO' => 'UpgradeServiceDetailInfoVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upgradeServiceDetailInfoVO) {
            $res['UpgradeServiceDetailInfoVO'] = [];
            if (null !== $this->upgradeServiceDetailInfoVO && \is_array($this->upgradeServiceDetailInfoVO)) {
                $n = 0;
                foreach ($this->upgradeServiceDetailInfoVO as $item) {
                    $res['UpgradeServiceDetailInfoVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeServiceDetailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpgradeServiceDetailInfoVO'])) {
            if (!empty($map['UpgradeServiceDetailInfoVO'])) {
                $model->upgradeServiceDetailInfoVO = [];
                $n                                 = 0;
                foreach ($map['UpgradeServiceDetailInfoVO'] as $item) {
                    $model->upgradeServiceDetailInfoVO[$n++] = null !== $item ? upgradeServiceDetailInfoVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

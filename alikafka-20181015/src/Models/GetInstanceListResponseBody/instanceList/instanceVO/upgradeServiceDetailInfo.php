<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo\upgradeServiceDetailInfoVO;

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
        if (\is_array($this->upgradeServiceDetailInfoVO)) {
            Model::validateArray($this->upgradeServiceDetailInfoVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->upgradeServiceDetailInfoVO) {
            if (\is_array($this->upgradeServiceDetailInfoVO)) {
                $res['UpgradeServiceDetailInfoVO'] = [];
                $n1 = 0;
                foreach ($this->upgradeServiceDetailInfoVO as $item1) {
                    $res['UpgradeServiceDetailInfoVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpgradeServiceDetailInfoVO'])) {
            if (!empty($map['UpgradeServiceDetailInfoVO'])) {
                $model->upgradeServiceDetailInfoVO = [];
                $n1 = 0;
                foreach ($map['UpgradeServiceDetailInfoVO'] as $item1) {
                    $model->upgradeServiceDetailInfoVO[$n1++] = upgradeServiceDetailInfoVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody\cards\usageDataMonths;
use AlibabaCloud\Tea\Model;

class cards extends Model
{
    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 89091231231219123
     *
     * @var string
     */
    public $iccid;

    /**
     * @var usageDataMonths[]
     */
    public $usageDataMonths;
    protected $_name = [
        'iccid'           => 'Iccid',
        'usageDataMonths' => 'UsageDataMonths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->usageDataMonths) {
            $res['UsageDataMonths'] = [];
            if (null !== $this->usageDataMonths && \is_array($this->usageDataMonths)) {
                $n = 0;
                foreach ($this->usageDataMonths as $item) {
                    $res['UsageDataMonths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['UsageDataMonths'])) {
            if (!empty($map['UsageDataMonths'])) {
                $model->usageDataMonths = [];
                $n                      = 0;
                foreach ($map['UsageDataMonths'] as $item) {
                    $model->usageDataMonths[$n++] = null !== $item ? usageDataMonths::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

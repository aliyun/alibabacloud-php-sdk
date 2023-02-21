<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardUsagesResponseBody;

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
     * @example 20
     *
     * @var int
     */
    public $usageDataMonth;
    protected $_name = [
        'iccid'          => 'Iccid',
        'usageDataMonth' => 'UsageDataMonth',
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
        if (null !== $this->usageDataMonth) {
            $res['UsageDataMonth'] = $this->usageDataMonth;
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
        if (isset($map['UsageDataMonth'])) {
            $model->usageDataMonth = $map['UsageDataMonth'];
        }

        return $model;
    }
}

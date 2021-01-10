<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics\logisticsDetailList;

use AlibabaCloud\Tea\Model;

class logisticsDetailList extends Model
{
    /**
     * @var string
     */
    public $standerdDesc;

    /**
     * @var string
     */
    public $statusIcon;

    /**
     * @var string
     */
    public $ocurrTimeStr;
    protected $_name = [
        'standerdDesc' => 'StanderdDesc',
        'statusIcon'   => 'StatusIcon',
        'ocurrTimeStr' => 'OcurrTimeStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->standerdDesc) {
            $res['StanderdDesc'] = $this->standerdDesc;
        }
        if (null !== $this->statusIcon) {
            $res['StatusIcon'] = $this->statusIcon;
        }
        if (null !== $this->ocurrTimeStr) {
            $res['OcurrTimeStr'] = $this->ocurrTimeStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logisticsDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StanderdDesc'])) {
            $model->standerdDesc = $map['StanderdDesc'];
        }
        if (isset($map['StatusIcon'])) {
            $model->statusIcon = $map['StatusIcon'];
        }
        if (isset($map['OcurrTimeStr'])) {
            $model->ocurrTimeStr = $map['OcurrTimeStr'];
        }

        return $model;
    }
}

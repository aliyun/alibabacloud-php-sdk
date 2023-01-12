<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody\model;

use AlibabaCloud\Tea\Model;

class logisticsDetailList extends Model
{
    /**
     * @var string
     */
    public $ocurrTimeStr;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $standerdDesc;

    /**
     * @var string
     */
    public $statusIcon;
    protected $_name = [
        'ocurrTimeStr' => 'OcurrTimeStr',
        'requestId'    => 'RequestId',
        'standerdDesc' => 'StanderdDesc',
        'statusIcon'   => 'StatusIcon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocurrTimeStr) {
            $res['OcurrTimeStr'] = $this->ocurrTimeStr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->standerdDesc) {
            $res['StanderdDesc'] = $this->standerdDesc;
        }
        if (null !== $this->statusIcon) {
            $res['StatusIcon'] = $this->statusIcon;
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
        if (isset($map['OcurrTimeStr'])) {
            $model->ocurrTimeStr = $map['OcurrTimeStr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StanderdDesc'])) {
            $model->standerdDesc = $map['StanderdDesc'];
        }
        if (isset($map['StatusIcon'])) {
            $model->statusIcon = $map['StatusIcon'];
        }

        return $model;
    }
}

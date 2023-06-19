<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListCardDayUsagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $iccids;

    /**
     * @example 1
     *
     * @var int
     */
    public $latestMonthNum;

    /**
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'iccids'                   => 'Iccids',
        'latestMonthNum'           => 'LatestMonthNum',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccids) {
            $res['Iccids'] = $this->iccids;
        }
        if (null !== $this->latestMonthNum) {
            $res['LatestMonthNum'] = $this->latestMonthNum;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCardDayUsagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccids'])) {
            if (!empty($map['Iccids'])) {
                $model->iccids = $map['Iccids'];
            }
        }
        if (isset($map['LatestMonthNum'])) {
            $model->latestMonthNum = $map['LatestMonthNum'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}

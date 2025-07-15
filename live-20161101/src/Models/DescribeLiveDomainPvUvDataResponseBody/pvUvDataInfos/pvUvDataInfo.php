<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataResponseBody\pvUvDataInfos;

use AlibabaCloud\Tea\Model;

class pvUvDataInfo extends Model
{
    /**
     * @description The number of PVs.
     *
     * @example 3036
     *
     * @var string
     */
    public $PV;

    /**
     * @description The timestamp of the data returned. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2018-03-19T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The number of UVs.
     *
     * @example 2
     *
     * @var string
     */
    public $UV;
    protected $_name = [
        'PV' => 'PV',
        'timeStamp' => 'TimeStamp',
        'UV' => 'UV',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->PV) {
            $res['PV'] = $this->PV;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvUvDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PV'])) {
            $model->PV = $map['PV'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList;

use AlibabaCloud\Tea\Model;

class bpsDataModel extends Model
{
    /**
     * @description The bandwidth value.
     *
     * @example 52119553
     *
     * @var int
     */
    public $bps;

    /**
     * @description The name of the ISP.
     *
     * @example unicom
     *
     * @var string
     */
    public $ispName;

    /**
     * @description The name of the region.
     *
     * @example Liaoning
     *
     * @var string
     */
    public $locationName;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bps' => 'Bps',
        'ispName' => 'IspName',
        'locationName' => 'LocationName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsDataModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}

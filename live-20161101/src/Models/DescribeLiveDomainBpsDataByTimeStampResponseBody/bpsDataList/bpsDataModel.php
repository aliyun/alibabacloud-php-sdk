<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponseBody\bpsDataList;

use AlibabaCloud\Tea\Model;

class bpsDataModel extends Model
{
    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var int
     */
    public $bps;
    protected $_name = [
        'locationName' => 'LocationName',
        'timeStamp'    => 'TimeStamp',
        'ispName'      => 'IspName',
        'bps'          => 'Bps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
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
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        return $model;
    }
}

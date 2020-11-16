<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByTimeStampResponse\bpsDataList;

use AlibabaCloud\Tea\Model;

class bpsDataModel extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var int
     */
    public $bps;
    protected $_name = [
        'timeStamp'    => 'TimeStamp',
        'locationName' => 'LocationName',
        'ispName'      => 'IspName',
        'bps'          => 'Bps',
    ];

    public function validate()
    {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('locationName', $this->locationName, true);
        Model::validateRequired('ispName', $this->ispName, true);
        Model::validateRequired('bps', $this->bps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
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

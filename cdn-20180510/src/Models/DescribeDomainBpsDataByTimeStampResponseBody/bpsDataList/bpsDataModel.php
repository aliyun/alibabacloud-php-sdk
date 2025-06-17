<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponseBody\bpsDataList;

use AlibabaCloud\Dara\Model;

class bpsDataModel extends Model
{
    /**
     * @var int
     */
    public $bps;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bps' => 'Bps',
        'ispName' => 'IspName',
        'locationName' => 'LocationName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

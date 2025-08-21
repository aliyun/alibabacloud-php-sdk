<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainBpsDataByTimeStampRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ispNames;

    /**
     * @var string
     */
    public $locationNames;

    /**
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'domainName' => 'DomainName',
        'ispNames' => 'IspNames',
        'locationNames' => 'LocationNames',
        'timePoint' => 'TimePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->ispNames) {
            $res['IspNames'] = $this->ispNames;
        }

        if (null !== $this->locationNames) {
            $res['LocationNames'] = $this->locationNames;
        }

        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['IspNames'])) {
            $model->ispNames = $map['IspNames'];
        }

        if (isset($map['LocationNames'])) {
            $model->locationNames = $map['LocationNames'];
        }

        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}

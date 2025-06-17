<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeRangeDataByLocateAndIspServiceRequest extends Model
{
    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var string
     */
    public $endTime;

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
    public $startTime;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'endTime' => 'EndTime',
        'ispNames' => 'IspNames',
        'locationNames' => 'LocationNames',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ispNames) {
            $res['IspNames'] = $this->ispNames;
        }

        if (null !== $this->locationNames) {
            $res['LocationNames'] = $this->locationNames;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IspNames'])) {
            $model->ispNames = $map['IspNames'];
        }

        if (isset($map['LocationNames'])) {
            $model->locationNames = $map['LocationNames'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

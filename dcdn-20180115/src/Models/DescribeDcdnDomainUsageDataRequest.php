<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainUsageDataRequest extends Model
{
    /**
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @example all
     *
     * @var string
     */
    public $dataProtocol;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2015-12-10T22:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example bps
     *
     * @var string
     */
    public $field;

    /**
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'area'         => 'Area',
        'dataProtocol' => 'DataProtocol',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'field'        => 'Field',
        'interval'     => 'Interval',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->dataProtocol) {
            $res['DataProtocol'] = $this->dataProtocol;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DataProtocol'])) {
            $model->dataProtocol = $map['DataProtocol'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

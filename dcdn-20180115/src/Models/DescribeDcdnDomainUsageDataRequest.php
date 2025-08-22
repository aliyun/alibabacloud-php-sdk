<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnDomainUsageDataRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $dataProtocol;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'area' => 'Area',
        'dataProtocol' => 'DataProtocol',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'field' => 'Field',
        'interval' => 'Interval',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

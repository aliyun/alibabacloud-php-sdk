<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListMeasureDataRequest extends Model
{
    /**
     * @var string
     */
    public $componentCode;

    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'domainCode' => 'DomainCode',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['ComponentCode'] = $this->componentCode;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['ComponentCode'])) {
            $model->componentCode = $map['ComponentCode'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

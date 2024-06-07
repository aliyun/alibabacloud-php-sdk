<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMeasureDataResponseBody;

use AlibabaCloud\Tea\Model;

class measureDatas extends Model
{
    /**
     * @example Count
     *
     * @var string
     */
    public $componentCode;

    /**
     * @example DideAlarmPhone
     *
     * @var string
     */
    public $domainCode;

    /**
     * @example 1717430400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1717344000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'domainCode'    => 'DomainCode',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'usage'         => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return measureDatas
     */
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
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}

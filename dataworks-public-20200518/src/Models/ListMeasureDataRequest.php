<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListMeasureDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Count
     *
     * @var string
     */
    public $componentCode;

    /**
     * @description This parameter is required.
     *
     * @example DideAlarmPhone
     *
     * @var string
     */
    public $domainCode;

    /**
     * @description This parameter is required.
     *
     * @example 1717430400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 1717344000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'componentCode' => 'ComponentCode',
        'domainCode'    => 'DomainCode',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMeasureDataRequest
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPvDataResponseBody\pvDataInterval;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @example 2015-11-28T03:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description Queries the page view (PV) data of an accelerated domain name. The data is collected at an interval of 1 hour. You can query data within the last 90 days.
     *
     * @example 9292
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData\value;
use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @description The timestamp of the data returned.
     *
     * @example 2019-11-29T05:39:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The proportions of the HTTP status codes.
     *
     * @var value
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
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
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
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}

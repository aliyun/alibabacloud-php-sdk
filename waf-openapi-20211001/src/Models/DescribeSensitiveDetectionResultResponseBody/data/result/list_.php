<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of personal information records.
     *
     * @example 11
     *
     * @var int
     */
    public $infoCount;

    /**
     * @description The number of sensitive personal information records that are involved in cross-border data transfer.
     *
     * @example 6
     *
     * @var int
     */
    public $outboundCount;

    /**
     * @description The sensitive data type.
     *
     * @example 1002
     *
     * @var int
     */
    public $sensitiveCode;
    protected $_name = [
        'infoCount' => 'InfoCount',
        'outboundCount' => 'OutboundCount',
        'sensitiveCode' => 'SensitiveCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoCount) {
            $res['InfoCount'] = $this->infoCount;
        }
        if (null !== $this->outboundCount) {
            $res['OutboundCount'] = $this->outboundCount;
        }
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoCount'])) {
            $model->infoCount = $map['InfoCount'];
        }
        if (isset($map['OutboundCount'])) {
            $model->outboundCount = $map['OutboundCount'];
        }
        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        return $model;
    }
}

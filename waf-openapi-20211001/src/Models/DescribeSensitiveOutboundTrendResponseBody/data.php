<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of personal information records.
     *
     * @example 672
     *
     * @var int
     */
    public $infoCount;

    /**
     * @description The total number of personal information records involved in cross-border data transfer.
     *
     * @example 541
     *
     * @var int
     */
    public $infoOutboundCount;

    /**
     * @description The total number of sensitive information records involved in cross-border data transfer.
     *
     * @example 378
     *
     * @var int
     */
    public $sensitiveOutboundCount;

    /**
     * @description The time of cross-border data transfer. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1672502400
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'infoCount'              => 'InfoCount',
        'infoOutboundCount'      => 'InfoOutboundCount',
        'sensitiveOutboundCount' => 'SensitiveOutboundCount',
        'timestamp'              => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoCount) {
            $res['InfoCount'] = $this->infoCount;
        }
        if (null !== $this->infoOutboundCount) {
            $res['InfoOutboundCount'] = $this->infoOutboundCount;
        }
        if (null !== $this->sensitiveOutboundCount) {
            $res['SensitiveOutboundCount'] = $this->sensitiveOutboundCount;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoCount'])) {
            $model->infoCount = $map['InfoCount'];
        }
        if (isset($map['InfoOutboundCount'])) {
            $model->infoOutboundCount = $map['InfoOutboundCount'];
        }
        if (isset($map['SensitiveOutboundCount'])) {
            $model->sensitiveOutboundCount = $map['SensitiveOutboundCount'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}

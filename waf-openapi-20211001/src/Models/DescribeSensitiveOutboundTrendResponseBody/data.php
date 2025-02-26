<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $infoCount;
    /**
     * @var int
     */
    public $infoOutboundCount;
    /**
     * @var int
     */
    public $sensitiveOutboundCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

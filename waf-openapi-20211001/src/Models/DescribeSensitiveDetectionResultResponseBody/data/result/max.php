<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveDetectionResultResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class max extends Model
{
    /**
     * @var int
     */
    public $infoCount;
    /**
     * @var int
     */
    public $outboundCount;
    /**
     * @var int
     */
    public $sensitiveCode;
    protected $_name = [
        'infoCount'     => 'InfoCount',
        'outboundCount' => 'OutboundCount',
        'sensitiveCode' => 'SensitiveCode',
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

        if (null !== $this->outboundCount) {
            $res['OutboundCount'] = $this->outboundCount;
        }

        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
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

        if (isset($map['OutboundCount'])) {
            $model->outboundCount = $map['OutboundCount'];
        }

        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        return $model;
    }
}

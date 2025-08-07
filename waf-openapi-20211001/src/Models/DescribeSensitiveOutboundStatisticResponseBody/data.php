<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $detectionResult;

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

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $sensitiveType;
    protected $_name = [
        'detectionResult' => 'DetectionResult',
        'infoCount' => 'InfoCount',
        'outboundCount' => 'OutboundCount',
        'sensitiveCode' => 'SensitiveCode',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveType' => 'SensitiveType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }

        if (null !== $this->infoCount) {
            $res['InfoCount'] = $this->infoCount;
        }

        if (null !== $this->outboundCount) {
            $res['OutboundCount'] = $this->outboundCount;
        }

        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
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
        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }

        if (isset($map['InfoCount'])) {
            $model->infoCount = $map['InfoCount'];
        }

        if (isset($map['OutboundCount'])) {
            $model->outboundCount = $map['OutboundCount'];
        }

        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }

        return $model;
    }
}

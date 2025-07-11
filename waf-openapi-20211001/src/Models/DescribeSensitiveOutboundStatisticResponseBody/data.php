<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The evaluation result. Valid values:
     *
     *   **report**: Risks exist in cross-border data transfer.
     *   **none**: No risks exist in cross-border data transfer.
     *
     * @example report
     *
     * @var string
     */
    public $detectionResult;

    /**
     * @description The total number of entries returned.
     *
     * @example 546
     *
     * @var int
     */
    public $infoCount;

    /**
     * @description The number of data entries that are transferred across borders.
     *
     * @example 300
     *
     * @var int
     */
    public $outboundCount;

    /**
     * @description The type of the sensitive data.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of sensitive data.
     *
     * @example 1001
     *
     * @var int
     */
    public $sensitiveCode;

    /**
     * @description The sensitivity level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @description The type of the information. Valid values:
     *
     *   **info**: full personal information
     *   **sensitive**: sensitive personal information
     *
     * @example info
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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

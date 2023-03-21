<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @var string
     */
    public $sensitiveFileName;
    protected $_name = [
        'count'             => 'Count',
        'firstScanTime'     => 'FirstScanTime',
        'lastScanTime'      => 'LastScanTime',
        'riskLevel'         => 'RiskLevel',
        'sensitiveFileKey'  => 'SensitiveFileKey',
        'sensitiveFileName' => 'SensitiveFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }
        if (null !== $this->sensitiveFileName) {
            $res['SensitiveFileName'] = $this->sensitiveFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }
        if (isset($map['SensitiveFileName'])) {
            $model->sensitiveFileName = $map['SensitiveFileName'];
        }

        return $model;
    }
}

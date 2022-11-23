<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileByKeyResponseBody;

use AlibabaCloud\Tea\Model;

class sensitiveFileList extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string
     */
    public $filePath;

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
    public $layerDigest;

    /**
     * @var string
     */
    public $promt;

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
        'advice'            => 'Advice',
        'filePath'          => 'FilePath',
        'firstScanTime'     => 'FirstScanTime',
        'lastScanTime'      => 'LastScanTime',
        'layerDigest'       => 'LayerDigest',
        'promt'             => 'Promt',
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
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->layerDigest) {
            $res['LayerDigest'] = $this->layerDigest;
        }
        if (null !== $this->promt) {
            $res['Promt'] = $this->promt;
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
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['LayerDigest'])) {
            $model->layerDigest = $map['LayerDigest'];
        }
        if (isset($map['Promt'])) {
            $model->promt = $map['Promt'];
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

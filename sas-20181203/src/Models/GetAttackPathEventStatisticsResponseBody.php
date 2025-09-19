<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetAttackPathEventStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $seriousPathRiskNum;

    /**
     * @var int
     */
    public $totalAssetRiskNum;

    /**
     * @var int
     */
    public $totalPathRiskNum;
    protected $_name = [
        'requestId' => 'RequestId',
        'seriousPathRiskNum' => 'SeriousPathRiskNum',
        'totalAssetRiskNum' => 'TotalAssetRiskNum',
        'totalPathRiskNum' => 'TotalPathRiskNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->seriousPathRiskNum) {
            $res['SeriousPathRiskNum'] = $this->seriousPathRiskNum;
        }

        if (null !== $this->totalAssetRiskNum) {
            $res['TotalAssetRiskNum'] = $this->totalAssetRiskNum;
        }

        if (null !== $this->totalPathRiskNum) {
            $res['TotalPathRiskNum'] = $this->totalPathRiskNum;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SeriousPathRiskNum'])) {
            $model->seriousPathRiskNum = $map['SeriousPathRiskNum'];
        }

        if (isset($map['TotalAssetRiskNum'])) {
            $model->totalAssetRiskNum = $map['TotalAssetRiskNum'];
        }

        if (isset($map['TotalPathRiskNum'])) {
            $model->totalPathRiskNum = $map['TotalPathRiskNum'];
        }

        return $model;
    }
}

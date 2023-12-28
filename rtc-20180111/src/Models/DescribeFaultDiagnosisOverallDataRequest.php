<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisOverallDataRequest extends Model
{
    /**
     * @description APP ID
     *
     * @example 4eah****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1615910399
     *
     * @var int
     */
    public $endTs;

    /**
     * @example 1615824000
     *
     * @var int
     */
    public $startTs;

    /**
     * @example JOIN_SLOW_USER
     *
     * @var string
     */
    public $statDim;
    protected $_name = [
        'appId'   => 'AppId',
        'endTs'   => 'EndTs',
        'startTs' => 'StartTs',
        'statDim' => 'StatDim',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->statDim) {
            $res['StatDim'] = $this->statDim;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisOverallDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['StatDim'])) {
            $model->statDim = $map['StatDim'];
        }

        return $model;
    }
}

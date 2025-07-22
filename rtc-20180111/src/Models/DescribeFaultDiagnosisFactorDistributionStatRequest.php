<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisFactorDistributionStatRequest extends Model
{
    /**
     * @description APP ID。
     *
     * This parameter is required.
     *
     * @example 0rbd****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 1615892596****
     *
     * @var int
     */
    public $endTs;

    /**
     * @description This parameter is required.
     *
     * @example 1615892596
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'appId' => 'AppId',
        'endTs' => 'EndTs',
        'startTs' => 'StartTs',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatRequest
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

        return $model;
    }
}

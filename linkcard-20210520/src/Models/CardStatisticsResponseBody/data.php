<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\errorStopStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\exhaustStopStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\expireStopStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\flowOutStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\manageStopStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\riskWaringStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\unbindResumeStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\unCertifiedStopStatisticsDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponseBody\data\weekWarnStatisticsDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var errorStopStatisticsDTO
     */
    public $errorStopStatisticsDTO;

    /**
     * @var exhaustStopStatisticsDTO
     */
    public $exhaustStopStatisticsDTO;

    /**
     * @var expireStopStatisticsDTO
     */
    public $expireStopStatisticsDTO;

    /**
     * @var flowOutStatisticsDTO
     */
    public $flowOutStatisticsDTO;

    /**
     * @var manageStopStatisticsDTO
     */
    public $manageStopStatisticsDTO;

    /**
     * @var riskWaringStatisticsDTO
     */
    public $riskWaringStatisticsDTO;

    /**
     * @var unCertifiedStopStatisticsDTO
     */
    public $unCertifiedStopStatisticsDTO;

    /**
     * @var unbindResumeStatisticsDTO
     */
    public $unbindResumeStatisticsDTO;

    /**
     * @var weekWarnStatisticsDTO
     */
    public $weekWarnStatisticsDTO;
    protected $_name = [
        'errorStopStatisticsDTO'       => 'ErrorStopStatisticsDTO',
        'exhaustStopStatisticsDTO'     => 'ExhaustStopStatisticsDTO',
        'expireStopStatisticsDTO'      => 'ExpireStopStatisticsDTO',
        'flowOutStatisticsDTO'         => 'FlowOutStatisticsDTO',
        'manageStopStatisticsDTO'      => 'ManageStopStatisticsDTO',
        'riskWaringStatisticsDTO'      => 'RiskWaringStatisticsDTO',
        'unCertifiedStopStatisticsDTO' => 'UnCertifiedStopStatisticsDTO',
        'unbindResumeStatisticsDTO'    => 'UnbindResumeStatisticsDTO',
        'weekWarnStatisticsDTO'        => 'WeekWarnStatisticsDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorStopStatisticsDTO) {
            $res['ErrorStopStatisticsDTO'] = null !== $this->errorStopStatisticsDTO ? $this->errorStopStatisticsDTO->toMap() : null;
        }
        if (null !== $this->exhaustStopStatisticsDTO) {
            $res['ExhaustStopStatisticsDTO'] = null !== $this->exhaustStopStatisticsDTO ? $this->exhaustStopStatisticsDTO->toMap() : null;
        }
        if (null !== $this->expireStopStatisticsDTO) {
            $res['ExpireStopStatisticsDTO'] = null !== $this->expireStopStatisticsDTO ? $this->expireStopStatisticsDTO->toMap() : null;
        }
        if (null !== $this->flowOutStatisticsDTO) {
            $res['FlowOutStatisticsDTO'] = null !== $this->flowOutStatisticsDTO ? $this->flowOutStatisticsDTO->toMap() : null;
        }
        if (null !== $this->manageStopStatisticsDTO) {
            $res['ManageStopStatisticsDTO'] = null !== $this->manageStopStatisticsDTO ? $this->manageStopStatisticsDTO->toMap() : null;
        }
        if (null !== $this->riskWaringStatisticsDTO) {
            $res['RiskWaringStatisticsDTO'] = null !== $this->riskWaringStatisticsDTO ? $this->riskWaringStatisticsDTO->toMap() : null;
        }
        if (null !== $this->unCertifiedStopStatisticsDTO) {
            $res['UnCertifiedStopStatisticsDTO'] = null !== $this->unCertifiedStopStatisticsDTO ? $this->unCertifiedStopStatisticsDTO->toMap() : null;
        }
        if (null !== $this->unbindResumeStatisticsDTO) {
            $res['UnbindResumeStatisticsDTO'] = null !== $this->unbindResumeStatisticsDTO ? $this->unbindResumeStatisticsDTO->toMap() : null;
        }
        if (null !== $this->weekWarnStatisticsDTO) {
            $res['WeekWarnStatisticsDTO'] = null !== $this->weekWarnStatisticsDTO ? $this->weekWarnStatisticsDTO->toMap() : null;
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
        if (isset($map['ErrorStopStatisticsDTO'])) {
            $model->errorStopStatisticsDTO = errorStopStatisticsDTO::fromMap($map['ErrorStopStatisticsDTO']);
        }
        if (isset($map['ExhaustStopStatisticsDTO'])) {
            $model->exhaustStopStatisticsDTO = exhaustStopStatisticsDTO::fromMap($map['ExhaustStopStatisticsDTO']);
        }
        if (isset($map['ExpireStopStatisticsDTO'])) {
            $model->expireStopStatisticsDTO = expireStopStatisticsDTO::fromMap($map['ExpireStopStatisticsDTO']);
        }
        if (isset($map['FlowOutStatisticsDTO'])) {
            $model->flowOutStatisticsDTO = flowOutStatisticsDTO::fromMap($map['FlowOutStatisticsDTO']);
        }
        if (isset($map['ManageStopStatisticsDTO'])) {
            $model->manageStopStatisticsDTO = manageStopStatisticsDTO::fromMap($map['ManageStopStatisticsDTO']);
        }
        if (isset($map['RiskWaringStatisticsDTO'])) {
            $model->riskWaringStatisticsDTO = riskWaringStatisticsDTO::fromMap($map['RiskWaringStatisticsDTO']);
        }
        if (isset($map['UnCertifiedStopStatisticsDTO'])) {
            $model->unCertifiedStopStatisticsDTO = unCertifiedStopStatisticsDTO::fromMap($map['UnCertifiedStopStatisticsDTO']);
        }
        if (isset($map['UnbindResumeStatisticsDTO'])) {
            $model->unbindResumeStatisticsDTO = unbindResumeStatisticsDTO::fromMap($map['UnbindResumeStatisticsDTO']);
        }
        if (isset($map['WeekWarnStatisticsDTO'])) {
            $model->weekWarnStatisticsDTO = weekWarnStatisticsDTO::fromMap($map['WeekWarnStatisticsDTO']);
        }

        return $model;
    }
}

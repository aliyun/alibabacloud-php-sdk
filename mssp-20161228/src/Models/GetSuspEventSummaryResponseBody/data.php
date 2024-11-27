<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\networkAttackTrendDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventDealSummaryDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTopDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTrendDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var networkAttackTrendDTO
     */
    public $networkAttackTrendDTO;

    /**
     * @var suspEventDealSummaryDTO
     */
    public $suspEventDealSummaryDTO;

    /**
     * @var suspEventTopDTO
     */
    public $suspEventTopDTO;

    /**
     * @var suspEventTrendDTO
     */
    public $suspEventTrendDTO;
    protected $_name = [
        'networkAttackTrendDTO'   => 'NetworkAttackTrendDTO',
        'suspEventDealSummaryDTO' => 'SuspEventDealSummaryDTO',
        'suspEventTopDTO'         => 'SuspEventTopDTO',
        'suspEventTrendDTO'       => 'SuspEventTrendDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAttackTrendDTO) {
            $res['NetworkAttackTrendDTO'] = null !== $this->networkAttackTrendDTO ? $this->networkAttackTrendDTO->toMap() : null;
        }
        if (null !== $this->suspEventDealSummaryDTO) {
            $res['SuspEventDealSummaryDTO'] = null !== $this->suspEventDealSummaryDTO ? $this->suspEventDealSummaryDTO->toMap() : null;
        }
        if (null !== $this->suspEventTopDTO) {
            $res['SuspEventTopDTO'] = null !== $this->suspEventTopDTO ? $this->suspEventTopDTO->toMap() : null;
        }
        if (null !== $this->suspEventTrendDTO) {
            $res['SuspEventTrendDTO'] = null !== $this->suspEventTrendDTO ? $this->suspEventTrendDTO->toMap() : null;
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
        if (isset($map['NetworkAttackTrendDTO'])) {
            $model->networkAttackTrendDTO = networkAttackTrendDTO::fromMap($map['NetworkAttackTrendDTO']);
        }
        if (isset($map['SuspEventDealSummaryDTO'])) {
            $model->suspEventDealSummaryDTO = suspEventDealSummaryDTO::fromMap($map['SuspEventDealSummaryDTO']);
        }
        if (isset($map['SuspEventTopDTO'])) {
            $model->suspEventTopDTO = suspEventTopDTO::fromMap($map['SuspEventTopDTO']);
        }
        if (isset($map['SuspEventTrendDTO'])) {
            $model->suspEventTrendDTO = suspEventTrendDTO::fromMap($map['SuspEventTrendDTO']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\networkAttackTrendDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventDealSummaryDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTopDTO;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\suspEventTrendDTO;

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
        if (null !== $this->networkAttackTrendDTO) {
            $this->networkAttackTrendDTO->validate();
        }
        if (null !== $this->suspEventDealSummaryDTO) {
            $this->suspEventDealSummaryDTO->validate();
        }
        if (null !== $this->suspEventTopDTO) {
            $this->suspEventTopDTO->validate();
        }
        if (null !== $this->suspEventTrendDTO) {
            $this->suspEventTrendDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAttackTrendDTO) {
            $res['NetworkAttackTrendDTO'] = null !== $this->networkAttackTrendDTO ? $this->networkAttackTrendDTO->toArray($noStream) : $this->networkAttackTrendDTO;
        }

        if (null !== $this->suspEventDealSummaryDTO) {
            $res['SuspEventDealSummaryDTO'] = null !== $this->suspEventDealSummaryDTO ? $this->suspEventDealSummaryDTO->toArray($noStream) : $this->suspEventDealSummaryDTO;
        }

        if (null !== $this->suspEventTopDTO) {
            $res['SuspEventTopDTO'] = null !== $this->suspEventTopDTO ? $this->suspEventTopDTO->toArray($noStream) : $this->suspEventTopDTO;
        }

        if (null !== $this->suspEventTrendDTO) {
            $res['SuspEventTrendDTO'] = null !== $this->suspEventTrendDTO ? $this->suspEventTrendDTO->toArray($noStream) : $this->suspEventTrendDTO;
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

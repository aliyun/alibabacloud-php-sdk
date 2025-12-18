<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\RiskCheckResults\metadata;
use AlibabaCloud\SDK\APIG\V20240327\Models\RiskCheckResults\riskDetails;

class RiskCheckResults extends Model
{
    /**
     * @var int
     */
    public $checkTime;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var riskDetails[]
     */
    public $riskDetails;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $snapshotTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalRisk;
    protected $_name = [
        'checkTime' => 'checkTime',
        'gatewayId' => 'gatewayId',
        'metadata' => 'metadata',
        'riskDetails' => 'riskDetails',
        'riskLevel' => 'riskLevel',
        'score' => 'score',
        'snapshotTime' => 'snapshotTime',
        'status' => 'status',
        'totalRisk' => 'totalRisk',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (\is_array($this->riskDetails)) {
            Model::validateArray($this->riskDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkTime) {
            $res['checkTime'] = $this->checkTime;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->riskDetails) {
            if (\is_array($this->riskDetails)) {
                $res['riskDetails'] = [];
                $n1 = 0;
                foreach ($this->riskDetails as $item1) {
                    $res['riskDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->snapshotTime) {
            $res['snapshotTime'] = $this->snapshotTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalRisk) {
            $res['totalRisk'] = $this->totalRisk;
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
        if (isset($map['checkTime'])) {
            $model->checkTime = $map['checkTime'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['riskDetails'])) {
            if (!empty($map['riskDetails'])) {
                $model->riskDetails = [];
                $n1 = 0;
                foreach ($map['riskDetails'] as $item1) {
                    $model->riskDetails[$n1] = riskDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['snapshotTime'])) {
            $model->snapshotTime = $map['snapshotTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalRisk'])) {
            $model->totalRisk = $map['totalRisk'];
        }

        return $model;
    }
}

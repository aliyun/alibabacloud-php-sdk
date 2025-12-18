<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\riskOverview;

use AlibabaCloud\Dara\Model;

class riskDetails extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string[]
     */
    public $riskNames;

    /**
     * @var string
     */
    public $score;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'gatewayName' => 'gatewayName',
        'riskLevel' => 'riskLevel',
        'riskNames' => 'riskNames',
        'score' => 'score',
    ];

    public function validate()
    {
        if (\is_array($this->riskNames)) {
            Model::validateArray($this->riskNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayName) {
            $res['gatewayName'] = $this->gatewayName;
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskNames) {
            if (\is_array($this->riskNames)) {
                $res['riskNames'] = [];
                $n1 = 0;
                foreach ($this->riskNames as $item1) {
                    $res['riskNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['gatewayName'])) {
            $model->gatewayName = $map['gatewayName'];
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['riskNames'])) {
            if (!empty($map['riskNames'])) {
                $model->riskNames = [];
                $n1 = 0;
                foreach ($map['riskNames'] as $item1) {
                    $model->riskNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        return $model;
    }
}

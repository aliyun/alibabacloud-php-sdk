<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyDeviceRiskStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyDeviceRiskStatisticsResponseBody\resultObject\items;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $faceAttackRate;

    /**
     * @var string
     */
    public $idFakeRate;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $rootRate;

    /**
     * @var string
     */
    public $simulatorRate;

    /**
     * @var string
     */
    public $virtualVideoRate;
    protected $_name = [
        'faceAttackRate' => 'FaceAttackRate',
        'idFakeRate' => 'IdFakeRate',
        'items' => 'Items',
        'riskCount' => 'RiskCount',
        'rootRate' => 'RootRate',
        'simulatorRate' => 'SimulatorRate',
        'virtualVideoRate' => 'VirtualVideoRate',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceAttackRate) {
            $res['FaceAttackRate'] = $this->faceAttackRate;
        }

        if (null !== $this->idFakeRate) {
            $res['IdFakeRate'] = $this->idFakeRate;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->rootRate) {
            $res['RootRate'] = $this->rootRate;
        }

        if (null !== $this->simulatorRate) {
            $res['SimulatorRate'] = $this->simulatorRate;
        }

        if (null !== $this->virtualVideoRate) {
            $res['VirtualVideoRate'] = $this->virtualVideoRate;
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
        if (isset($map['FaceAttackRate'])) {
            $model->faceAttackRate = $map['FaceAttackRate'];
        }

        if (isset($map['IdFakeRate'])) {
            $model->idFakeRate = $map['IdFakeRate'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['RootRate'])) {
            $model->rootRate = $map['RootRate'];
        }

        if (isset($map['SimulatorRate'])) {
            $model->simulatorRate = $map['SimulatorRate'];
        }

        if (isset($map['VirtualVideoRate'])) {
            $model->virtualVideoRate = $map['VirtualVideoRate'];
        }

        return $model;
    }
}

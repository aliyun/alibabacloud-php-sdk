<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDataEventSelectorResponseBody\slsDeliveryConfigs;

class GetDataEventSelectorResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataEventSelectors;

    /**
     * @var bool
     */
    public $isTrailAllRegion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slsDeliveryConfigs[]
     */
    public $slsDeliveryConfigs;

    /**
     * @var string
     */
    public $trailArn;
    protected $_name = [
        'dataEventSelectors' => 'DataEventSelectors',
        'isTrailAllRegion' => 'IsTrailAllRegion',
        'requestId' => 'RequestId',
        'slsDeliveryConfigs' => 'SlsDeliveryConfigs',
        'trailArn' => 'TrailArn',
    ];

    public function validate()
    {
        if (\is_array($this->slsDeliveryConfigs)) {
            Model::validateArray($this->slsDeliveryConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEventSelectors) {
            $res['DataEventSelectors'] = $this->dataEventSelectors;
        }

        if (null !== $this->isTrailAllRegion) {
            $res['IsTrailAllRegion'] = $this->isTrailAllRegion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slsDeliveryConfigs) {
            if (\is_array($this->slsDeliveryConfigs)) {
                $res['SlsDeliveryConfigs'] = [];
                $n1 = 0;
                foreach ($this->slsDeliveryConfigs as $item1) {
                    $res['SlsDeliveryConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
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
        if (isset($map['DataEventSelectors'])) {
            $model->dataEventSelectors = $map['DataEventSelectors'];
        }

        if (isset($map['IsTrailAllRegion'])) {
            $model->isTrailAllRegion = $map['IsTrailAllRegion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlsDeliveryConfigs'])) {
            if (!empty($map['SlsDeliveryConfigs'])) {
                $model->slsDeliveryConfigs = [];
                $n1 = 0;
                foreach ($map['SlsDeliveryConfigs'] as $item1) {
                    $model->slsDeliveryConfigs[$n1] = slsDeliveryConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }

        return $model;
    }
}

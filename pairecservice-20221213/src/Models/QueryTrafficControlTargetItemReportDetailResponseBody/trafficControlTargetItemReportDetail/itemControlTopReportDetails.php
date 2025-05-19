<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponseBody\trafficControlTargetItemReportDetail;

use AlibabaCloud\Dara\Model;

class itemControlTopReportDetails extends Model
{
    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $targetProgress;

    /**
     * @var int
     */
    public $targetTraffic;
    protected $_name = [
        'features' => 'Features',
        'itemId' => 'ItemId',
        'targetProgress' => 'TargetProgress',
        'targetTraffic' => 'TargetTraffic',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                foreach ($this->features as $key1 => $value1) {
                    $res['Features'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->targetProgress) {
            $res['TargetProgress'] = $this->targetProgress;
        }

        if (null !== $this->targetTraffic) {
            $res['TargetTraffic'] = $this->targetTraffic;
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                foreach ($map['Features'] as $key1 => $value1) {
                    $model->features[$key1] = $value1;
                }
            }
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['TargetProgress'])) {
            $model->targetProgress = $map['TargetProgress'];
        }

        if (isset($map['TargetTraffic'])) {
            $model->targetTraffic = $map['TargetTraffic'];
        }

        return $model;
    }
}

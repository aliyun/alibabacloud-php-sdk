<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest\accelerateRegion;

class CreateIpSetsRequest extends Model
{
    /**
     * @var accelerateRegion[]
     */
    public $accelerateRegion;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateRegion' => 'AccelerateRegion',
        'acceleratorId' => 'AcceleratorId',
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->accelerateRegion)) {
            Model::validateArray($this->accelerateRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateRegion) {
            if (\is_array($this->accelerateRegion)) {
                $res['AccelerateRegion'] = [];
                $n1 = 0;
                foreach ($this->accelerateRegion as $item1) {
                    $res['AccelerateRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccelerateRegion'])) {
            if (!empty($map['AccelerateRegion'])) {
                $model->accelerateRegion = [];
                $n1 = 0;
                foreach ($map['AccelerateRegion'] as $item1) {
                    $model->accelerateRegion[$n1] = accelerateRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

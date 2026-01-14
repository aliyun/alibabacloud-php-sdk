<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class CreateSpareIpsRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $spareIps;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
        'spareIps' => 'SpareIps',
    ];

    public function validate()
    {
        if (\is_array($this->spareIps)) {
            Model::validateArray($this->spareIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->spareIps) {
            if (\is_array($this->spareIps)) {
                $res['SpareIps'] = [];
                $n1 = 0;
                foreach ($this->spareIps as $item1) {
                    $res['SpareIps'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SpareIps'])) {
            if (!empty($map['SpareIps'])) {
                $model->spareIps = [];
                $n1 = 0;
                foreach ($map['SpareIps'] as $item1) {
                    $model->spareIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

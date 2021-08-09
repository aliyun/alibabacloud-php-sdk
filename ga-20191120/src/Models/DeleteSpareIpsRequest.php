<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSpareIpsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

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
    public $acceleratorId;

    /**
     * @var string[]
     */
    public $spareIps;
    protected $_name = [
        'regionId'      => 'RegionId',
        'clientToken'   => 'ClientToken',
        'dryRun'        => 'DryRun',
        'acceleratorId' => 'AcceleratorId',
        'spareIps'      => 'SpareIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->spareIps) {
            $res['SpareIps'] = $this->spareIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSpareIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['SpareIps'])) {
            if (!empty($map['SpareIps'])) {
                $model->spareIps = $map['SpareIps'];
            }
        }

        return $model;
    }
}

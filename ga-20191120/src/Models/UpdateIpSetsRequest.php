<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest\ipSets;
use AlibabaCloud\Tea\Model;

class UpdateIpSetsRequest extends Model
{
    /**
     * @description The acceleration regions.
     *
     * This parameter is required.
     * @var ipSets[]
     */
    public $ipSets;

    /**
     * @description The region ID of the Global Accelerator (GA) instance. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipSets'   => 'IpSets',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipSets) {
            $res['IpSets'] = [];
            if (null !== $this->ipSets && \is_array($this->ipSets)) {
                $n = 0;
                foreach ($this->ipSets as $item) {
                    $res['IpSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpSets'])) {
            if (!empty($map['IpSets'])) {
                $model->ipSets = [];
                $n             = 0;
                foreach ($map['IpSets'] as $item) {
                    $model->ipSets[$n++] = null !== $item ? ipSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

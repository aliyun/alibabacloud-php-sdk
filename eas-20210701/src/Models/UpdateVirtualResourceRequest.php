<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateVirtualResourceRequest\resources;
use AlibabaCloud\Tea\Model;

class UpdateVirtualResourceRequest extends Model
{
    /**
     * @description Specifies whether to disable the retention period of preemptible instances.
     *
     * @example true
     *
     * @var bool
     */
    public $disableSpotProtectionPeriod;

    /**
     * @description The resources in the virtual resource group.
     *
     * >  If you specify this parameter, previous data is overwritten.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The new name of the virtual resource group.
     *
     * @example NewMyVirtualResource
     *
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'disableSpotProtectionPeriod' => 'DisableSpotProtectionPeriod',
        'resources' => 'Resources',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableSpotProtectionPeriod) {
            $res['DisableSpotProtectionPeriod'] = $this->disableSpotProtectionPeriod;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVirtualResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableSpotProtectionPeriod'])) {
            $model->disableSpotProtectionPeriod = $map['DisableSpotProtectionPeriod'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}

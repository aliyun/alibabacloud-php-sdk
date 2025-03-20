<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateConditionalAccessPolicyRequest\conditionsConfig;

use AlibabaCloud\Tea\Model;

class networkZones extends Model
{
    /**
     * @description Excluded network zones
     *
     * @var string[]
     */
    public $excludeNetworkZones;

    /**
     * @description Included network zones
     *
     * @var string[]
     */
    public $includeNetworkZones;
    protected $_name = [
        'excludeNetworkZones' => 'ExcludeNetworkZones',
        'includeNetworkZones' => 'IncludeNetworkZones',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeNetworkZones) {
            $res['ExcludeNetworkZones'] = $this->excludeNetworkZones;
        }
        if (null !== $this->includeNetworkZones) {
            $res['IncludeNetworkZones'] = $this->includeNetworkZones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeNetworkZones'])) {
            if (!empty($map['ExcludeNetworkZones'])) {
                $model->excludeNetworkZones = $map['ExcludeNetworkZones'];
            }
        }
        if (isset($map['IncludeNetworkZones'])) {
            if (!empty($map['IncludeNetworkZones'])) {
                $model->includeNetworkZones = $map['IncludeNetworkZones'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The available engine version and specifications.
     *
     * @var supportedEngines[]
     */
    public $supportedEngines;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'supportedEngines' => 'SupportedEngines',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = [];
            if (null !== $this->supportedEngines && \is_array($this->supportedEngines)) {
                $n = 0;
                foreach ($this->supportedEngines as $item) {
                    $res['SupportedEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedEngines'])) {
            if (!empty($map['SupportedEngines'])) {
                $model->supportedEngines = [];
                $n                       = 0;
                foreach ($map['SupportedEngines'] as $item) {
                    $model->supportedEngines[$n++] = null !== $item ? supportedEngines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse\resources\supportedEngines;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var supportedEngines[]
     */
    public $supportedEngines;
    protected $_name = [
        'zoneId'           => 'ZoneId',
        'supportedEngines' => 'SupportedEngines',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('supportedEngines', $this->supportedEngines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = [];
            if (null !== $this->supportedEngines && \is_array($this->supportedEngines)) {
                $n = 0;
                foreach ($this->supportedEngines as $item) {
                    $res['SupportedEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SupportedEngines'])) {
            if (!empty($map['SupportedEngines'])) {
                $model->supportedEngines = [];
                $n                       = 0;
                foreach ($map['SupportedEngines'] as $item) {
                    $model->supportedEngines[$n++] = null !== $item ? supportedEngines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

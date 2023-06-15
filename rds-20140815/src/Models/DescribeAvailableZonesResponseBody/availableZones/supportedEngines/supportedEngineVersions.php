<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones\supportedEngines\supportedEngineVersions\supportedCategorys;
use AlibabaCloud\Tea\Model;

class supportedEngineVersions extends Model
{
    /**
     * @description An array that consists of the RDS editions available in the zone.
     *
     * @var supportedCategorys[]
     */
    public $supportedCategorys;

    /**
     * @description The database engine version of the instance.
     *
     * @example 8.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'supportedCategorys' => 'SupportedCategorys',
        'version'            => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCategorys) {
            $res['SupportedCategorys'] = [];
            if (null !== $this->supportedCategorys && \is_array($this->supportedCategorys)) {
                $n = 0;
                foreach ($this->supportedCategorys as $item) {
                    $res['SupportedCategorys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngineVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedCategorys'])) {
            if (!empty($map['SupportedCategorys'])) {
                $model->supportedCategorys = [];
                $n                         = 0;
                foreach ($map['SupportedCategorys'] as $item) {
                    $model->supportedCategorys[$n++] = null !== $item ? supportedCategorys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

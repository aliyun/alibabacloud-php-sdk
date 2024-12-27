<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Tea\Model;

class locationOptions extends Model
{
    /**
     * @description The administrative division levels. You can specify multiple administrative division levels.
     *
     * For example, you uploaded photos that were taken from March 3, 2024 to March 5, 2024 in Hangzhou and photos that were taken from March 6, 2024 to March 8, 2024 in Jiaxing. When you call the operation and set the parameter to `["city", "province"]`, the following spatiotemporal clusters are created from these photos:
     *
     *   March 3, 2024 to March 5, 2024, Hangzhou
     *   March 6, 2024 to March 8, 2024, Jiaxing
     *   March 3, 2024 to March 8, 2024, Zhejiang
     *
     * This parameter is required.
     * @var string[]
     */
    public $locationDateClusterLevels;
    protected $_name = [
        'locationDateClusterLevels' => 'LocationDateClusterLevels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationDateClusterLevels) {
            $res['LocationDateClusterLevels'] = $this->locationDateClusterLevels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locationOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationDateClusterLevels'])) {
            if (!empty($map['LocationDateClusterLevels'])) {
                $model->locationDateClusterLevels = $map['LocationDateClusterLevels'];
            }
        }

        return $model;
    }
}

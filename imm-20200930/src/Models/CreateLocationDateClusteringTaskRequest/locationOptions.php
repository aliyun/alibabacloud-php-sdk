<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Tea\Model;

class locationOptions extends Model
{
    /**
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

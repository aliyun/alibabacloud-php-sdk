<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class clusterUsedStorage extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var float
     */
    public $usedStorage;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'usedStorage' => 'UsedStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->usedStorage) {
            $res['UsedStorage'] = $this->usedStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterUsedStorage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UsedStorage'])) {
            $model->usedStorage = $map['UsedStorage'];
        }

        return $model;
    }
}

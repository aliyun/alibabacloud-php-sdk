<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths\mountedAIDBClusters\mountedAIDBClusters;

class mountedAIDBClusters extends Model
{
    /**
     * @var mountedAIDBClusters[]
     */
    public $mountedAIDBClusters;
    protected $_name = [
        'mountedAIDBClusters' => 'MountedAIDBClusters',
    ];

    public function validate()
    {
        if (\is_array($this->mountedAIDBClusters)) {
            Model::validateArray($this->mountedAIDBClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountedAIDBClusters) {
            if (\is_array($this->mountedAIDBClusters)) {
                $res['MountedAIDBClusters'] = [];
                $n1 = 0;
                foreach ($this->mountedAIDBClusters as $item1) {
                    $res['MountedAIDBClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountedAIDBClusters'])) {
            if (!empty($map['MountedAIDBClusters'])) {
                $model->mountedAIDBClusters = [];
                $n1 = 0;
                foreach ($map['MountedAIDBClusters'] as $item1) {
                    $model->mountedAIDBClusters[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

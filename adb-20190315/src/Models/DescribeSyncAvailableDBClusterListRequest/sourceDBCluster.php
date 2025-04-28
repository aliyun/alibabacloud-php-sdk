<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSyncAvailableDBClusterListRequest;

use AlibabaCloud\Dara\Model;

class sourceDBCluster extends Model
{
    /**
     * @var string
     */
    public $clusterIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

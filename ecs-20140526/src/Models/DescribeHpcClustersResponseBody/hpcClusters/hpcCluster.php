<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponseBody\hpcClusters;

use AlibabaCloud\Tea\Model;

class hpcCluster extends Model
{
    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the HPC cluster.
     *
     * @example hpc-bp1a5zr3u7nq9cx****
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description The description of the HPC cluster.
     *
     * @example testName
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description'  => 'Description',
        'hpcClusterId' => 'HpcClusterId',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hpcCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

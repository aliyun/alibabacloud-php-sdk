<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DescribeClustersQuery extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'name'        => 'Name',
        'clusterType' => 'clusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        return $model;
    }
}

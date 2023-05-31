<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetClusterCheckItemWarningStatisticsRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~182997~~) operation to query the IDs of container clusters.
     * @example cd49575861a3044d49c954e4b3911****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clusterId' => 'ClusterId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterCheckItemWarningStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

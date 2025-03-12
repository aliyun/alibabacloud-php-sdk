<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetClusterSuspEventStatisticsRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of container clusters.
     * @example c6094b964bfc145fe9e418c869e7e****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request source. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'from'      => 'From',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterSuspEventStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}

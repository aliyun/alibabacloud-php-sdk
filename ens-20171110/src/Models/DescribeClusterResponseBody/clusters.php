<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterResponseBody;

use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c8f0377146d104687ac562eef9403****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The version of the cluster.
     *
     * @example 1.18.8
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The cluster name.
     *
     * @example vc-a622bb**
     *
     * @var string
     */
    public $name;

    /**
     * @description The next version of the cluster.
     *
     * @example 1.20.8
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description The health status of the instance.
     *
     * Valid values:
     *
     *   healthy
     *   unhealthy
     *
     * @example healthy
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'currentVersion' => 'CurrentVersion',
        'name'           => 'Name',
        'nextVersion'    => 'NextVersion',
        'status'         => 'Status',
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
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextVersion) {
            $res['NextVersion'] = $this->nextVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextVersion'])) {
            $model->nextVersion = $map['NextVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

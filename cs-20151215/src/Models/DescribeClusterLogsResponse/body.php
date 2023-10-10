<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the log entry.
     *
     * @example 590749245
     *
     * @var int
     */
    public $ID;

    /**
     * @description The cluster ID.
     *
     * @example c23421cfa74454bc8b37163fd19af***
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The log content.
     *
     * @example start to update cluster status to CREATE_COMPLETE
     *
     * @var string
     */
    public $clusterLog;

    /**
     * @description The time when the log entry was generated.
     *
     * @example 2020-09-11T10:11:51+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The time when the log entry was updated.
     *
     * @example 2020-09-11T10:11:51+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'ID'         => 'ID',
        'clusterId'  => 'cluster_id',
        'clusterLog' => 'cluster_log',
        'created'    => 'created',
        'updated'    => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterLog) {
            $res['cluster_log'] = $this->clusterLog;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_log'])) {
            $model->clusterLog = $map['cluster_log'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}

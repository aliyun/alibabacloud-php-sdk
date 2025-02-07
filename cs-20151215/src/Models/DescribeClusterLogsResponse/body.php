<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterLogsResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var int
     */
    public $ID;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterLog;
    /**
     * @var string
     */
    public $created;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

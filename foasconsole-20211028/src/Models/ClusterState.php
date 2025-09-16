<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class ClusterState extends Model
{
    /**
     * @var ClusterStage
     */
    public $clusterStage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'clusterStage' => 'ClusterStage',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
    ];

    public function validate()
    {
        if (null !== $this->clusterStage) {
            $this->clusterStage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterStage) {
            $res['ClusterStage'] = null !== $this->clusterStage ? $this->clusterStage->toArray($noStream) : $this->clusterStage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
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
        if (isset($map['ClusterStage'])) {
            $model->clusterStage = ClusterStage::fromMap($map['ClusterStage']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}

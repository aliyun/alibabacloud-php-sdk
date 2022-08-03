<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\ReplicationProgressRule\progress;
use AlibabaCloud\Tea\Model;

class ReplicationProgressRule extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var ReplicationDestination
     */
    public $destination;

    /**
     * @var string
     */
    public $historicalObjectReplication;

    /**
     * @var string
     */
    public $ID;

    /**
     * @var ReplicationPrefixSet
     */
    public $prefixSet;

    /**
     * @var progress
     */
    public $progress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action'                      => 'Action',
        'destination'                 => 'Destination',
        'historicalObjectReplication' => 'HistoricalObjectReplication',
        'ID'                          => 'ID',
        'prefixSet'                   => 'PrefixSet',
        'progress'                    => 'Progress',
        'status'                      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toMap() : null;
        }
        if (null !== $this->historicalObjectReplication) {
            $res['HistoricalObjectReplication'] = $this->historicalObjectReplication;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->prefixSet) {
            $res['PrefixSet'] = null !== $this->prefixSet ? $this->prefixSet->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['Progress'] = null !== $this->progress ? $this->progress->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplicationProgressRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Destination'])) {
            $model->destination = ReplicationDestination::fromMap($map['Destination']);
        }
        if (isset($map['HistoricalObjectReplication'])) {
            $model->historicalObjectReplication = $map['HistoricalObjectReplication'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['PrefixSet'])) {
            $model->prefixSet = ReplicationPrefixSet::fromMap($map['PrefixSet']);
        }
        if (isset($map['Progress'])) {
            $model->progress = progress::fromMap($map['Progress']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

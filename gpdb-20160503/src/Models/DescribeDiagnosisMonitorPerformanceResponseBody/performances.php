<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDiagnosisMonitorPerformanceResponseBody;

use AlibabaCloud\Tea\Model;

class performances extends Model
{
    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $queryID;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'cost'      => 'Cost',
        'database'  => 'Database',
        'queryID'   => 'QueryID',
        'startTime' => 'StartTime',
        'status'    => 'Status',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->queryID) {
            $res['QueryID'] = $this->queryID;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['QueryID'])) {
            $model->queryID = $map['QueryID'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeShowStorageInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class storageInfos extends Model
{
    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $dbCount;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var string
     */
    public $instKind;

    /**
     * @var bool
     */
    public $isHealthy;

    /**
     * @var string
     */
    public $leaderNode;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $storageInstName;
    protected $_name = [
        'class' => 'Class',
        'dbCount' => 'DbCount',
        'deletable' => 'Deletable',
        'groupCount' => 'GroupCount',
        'instKind' => 'InstKind',
        'isHealthy' => 'IsHealthy',
        'leaderNode' => 'LeaderNode',
        'status' => 'Status',
        'storageInstName' => 'StorageInstName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->dbCount) {
            $res['DbCount'] = $this->dbCount;
        }

        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }

        if (null !== $this->instKind) {
            $res['InstKind'] = $this->instKind;
        }

        if (null !== $this->isHealthy) {
            $res['IsHealthy'] = $this->isHealthy;
        }

        if (null !== $this->leaderNode) {
            $res['LeaderNode'] = $this->leaderNode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageInstName) {
            $res['StorageInstName'] = $this->storageInstName;
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
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['DbCount'])) {
            $model->dbCount = $map['DbCount'];
        }

        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }

        if (isset($map['InstKind'])) {
            $model->instKind = $map['InstKind'];
        }

        if (isset($map['IsHealthy'])) {
            $model->isHealthy = $map['IsHealthy'];
        }

        if (isset($map['LeaderNode'])) {
            $model->leaderNode = $map['LeaderNode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageInstName'])) {
            $model->storageInstName = $map['StorageInstName'];
        }

        return $model;
    }
}

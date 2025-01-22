<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class masterStatusInfo extends Model
{
    /**
     * @var int
     */
    public $exceptionNodeNum;
    /**
     * @var int
     */
    public $normalNodeNum;
    /**
     * @var int
     */
    public $notPreferredNodeNum;
    /**
     * @var int
     */
    public $notSyncingNodeNum;
    /**
     * @var int
     */
    public $preferredNodeNum;
    /**
     * @var int
     */
    public $syncedNodeNum;
    protected $_name = [
        'exceptionNodeNum'    => 'ExceptionNodeNum',
        'normalNodeNum'       => 'NormalNodeNum',
        'notPreferredNodeNum' => 'NotPreferredNodeNum',
        'notSyncingNodeNum'   => 'NotSyncingNodeNum',
        'preferredNodeNum'    => 'PreferredNodeNum',
        'syncedNodeNum'       => 'SyncedNodeNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionNodeNum) {
            $res['ExceptionNodeNum'] = $this->exceptionNodeNum;
        }

        if (null !== $this->normalNodeNum) {
            $res['NormalNodeNum'] = $this->normalNodeNum;
        }

        if (null !== $this->notPreferredNodeNum) {
            $res['NotPreferredNodeNum'] = $this->notPreferredNodeNum;
        }

        if (null !== $this->notSyncingNodeNum) {
            $res['NotSyncingNodeNum'] = $this->notSyncingNodeNum;
        }

        if (null !== $this->preferredNodeNum) {
            $res['PreferredNodeNum'] = $this->preferredNodeNum;
        }

        if (null !== $this->syncedNodeNum) {
            $res['SyncedNodeNum'] = $this->syncedNodeNum;
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
        if (isset($map['ExceptionNodeNum'])) {
            $model->exceptionNodeNum = $map['ExceptionNodeNum'];
        }

        if (isset($map['NormalNodeNum'])) {
            $model->normalNodeNum = $map['NormalNodeNum'];
        }

        if (isset($map['NotPreferredNodeNum'])) {
            $model->notPreferredNodeNum = $map['NotPreferredNodeNum'];
        }

        if (isset($map['NotSyncingNodeNum'])) {
            $model->notSyncingNodeNum = $map['NotSyncingNodeNum'];
        }

        if (isset($map['PreferredNodeNum'])) {
            $model->preferredNodeNum = $map['PreferredNodeNum'];
        }

        if (isset($map['SyncedNodeNum'])) {
            $model->syncedNodeNum = $map['SyncedNodeNum'];
        }

        return $model;
    }
}

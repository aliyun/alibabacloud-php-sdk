<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceDiagnosisSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class segmentStatusInfo extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $exceptionNodeNum;

    /**
     * @example 4
     *
     * @var int
     */
    public $normalNodeNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $notPreferredNodeNum;

    /**
     * @example 4
     *
     * @var int
     */
    public $notSyncingNodeNum;

    /**
     * @example 4
     *
     * @var int
     */
    public $preferredNodeNum;

    /**
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return segmentStatusInfo
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class TableCompaction extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var float
     */
    public $cuUsage;

    /**
     * @var int
     */
    public $lastCompactedFileTime;

    /**
     * @var int
     */
    public $latencyFileEarliestTime;

    /**
     * @var string
     */
    public $maxLevel0FileCount;

    /**
     * @var string
     */
    public $tableId;
    protected $_name = [
        'catalogId' => 'catalogId',
        'cuUsage' => 'cuUsage',
        'lastCompactedFileTime' => 'lastCompactedFileTime',
        'latencyFileEarliestTime' => 'latencyFileEarliestTime',
        'maxLevel0FileCount' => 'maxLevel0FileCount',
        'tableId' => 'tableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->cuUsage) {
            $res['cuUsage'] = $this->cuUsage;
        }

        if (null !== $this->lastCompactedFileTime) {
            $res['lastCompactedFileTime'] = $this->lastCompactedFileTime;
        }

        if (null !== $this->latencyFileEarliestTime) {
            $res['latencyFileEarliestTime'] = $this->latencyFileEarliestTime;
        }

        if (null !== $this->maxLevel0FileCount) {
            $res['maxLevel0FileCount'] = $this->maxLevel0FileCount;
        }

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['cuUsage'])) {
            $model->cuUsage = $map['cuUsage'];
        }

        if (isset($map['lastCompactedFileTime'])) {
            $model->lastCompactedFileTime = $map['lastCompactedFileTime'];
        }

        if (isset($map['latencyFileEarliestTime'])) {
            $model->latencyFileEarliestTime = $map['latencyFileEarliestTime'];
        }

        if (isset($map['maxLevel0FileCount'])) {
            $model->maxLevel0FileCount = $map['maxLevel0FileCount'];
        }

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        return $model;
    }
}

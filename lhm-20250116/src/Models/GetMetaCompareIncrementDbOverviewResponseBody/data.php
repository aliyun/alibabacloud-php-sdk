<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetMetaCompareIncrementDbOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $compareJobId;

    /**
     * @var string
     */
    public $curVersionTime;

    /**
     * @var int
     */
    public $diffAddPartitionNum;

    /**
     * @var int
     */
    public $diffAddTableNum;

    /**
     * @var int
     */
    public $diffDelPartitionNum;

    /**
     * @var int
     */
    public $diffDelTableNum;

    /**
     * @var int
     */
    public $diffModifyPartitionNum;

    /**
     * @var int
     */
    public $diffModifyTableNum;

    /**
     * @var int
     */
    public $diffPartitionNum;

    /**
     * @var int
     */
    public $diffTableNum;

    /**
     * @var string
     */
    public $prevVersionTime;
    protected $_name = [
        'compareJobId' => 'compareJobId',
        'curVersionTime' => 'curVersionTime',
        'diffAddPartitionNum' => 'diffAddPartitionNum',
        'diffAddTableNum' => 'diffAddTableNum',
        'diffDelPartitionNum' => 'diffDelPartitionNum',
        'diffDelTableNum' => 'diffDelTableNum',
        'diffModifyPartitionNum' => 'diffModifyPartitionNum',
        'diffModifyTableNum' => 'diffModifyTableNum',
        'diffPartitionNum' => 'diffPartitionNum',
        'diffTableNum' => 'diffTableNum',
        'prevVersionTime' => 'prevVersionTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareJobId) {
            $res['compareJobId'] = $this->compareJobId;
        }

        if (null !== $this->curVersionTime) {
            $res['curVersionTime'] = $this->curVersionTime;
        }

        if (null !== $this->diffAddPartitionNum) {
            $res['diffAddPartitionNum'] = $this->diffAddPartitionNum;
        }

        if (null !== $this->diffAddTableNum) {
            $res['diffAddTableNum'] = $this->diffAddTableNum;
        }

        if (null !== $this->diffDelPartitionNum) {
            $res['diffDelPartitionNum'] = $this->diffDelPartitionNum;
        }

        if (null !== $this->diffDelTableNum) {
            $res['diffDelTableNum'] = $this->diffDelTableNum;
        }

        if (null !== $this->diffModifyPartitionNum) {
            $res['diffModifyPartitionNum'] = $this->diffModifyPartitionNum;
        }

        if (null !== $this->diffModifyTableNum) {
            $res['diffModifyTableNum'] = $this->diffModifyTableNum;
        }

        if (null !== $this->diffPartitionNum) {
            $res['diffPartitionNum'] = $this->diffPartitionNum;
        }

        if (null !== $this->diffTableNum) {
            $res['diffTableNum'] = $this->diffTableNum;
        }

        if (null !== $this->prevVersionTime) {
            $res['prevVersionTime'] = $this->prevVersionTime;
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
        if (isset($map['compareJobId'])) {
            $model->compareJobId = $map['compareJobId'];
        }

        if (isset($map['curVersionTime'])) {
            $model->curVersionTime = $map['curVersionTime'];
        }

        if (isset($map['diffAddPartitionNum'])) {
            $model->diffAddPartitionNum = $map['diffAddPartitionNum'];
        }

        if (isset($map['diffAddTableNum'])) {
            $model->diffAddTableNum = $map['diffAddTableNum'];
        }

        if (isset($map['diffDelPartitionNum'])) {
            $model->diffDelPartitionNum = $map['diffDelPartitionNum'];
        }

        if (isset($map['diffDelTableNum'])) {
            $model->diffDelTableNum = $map['diffDelTableNum'];
        }

        if (isset($map['diffModifyPartitionNum'])) {
            $model->diffModifyPartitionNum = $map['diffModifyPartitionNum'];
        }

        if (isset($map['diffModifyTableNum'])) {
            $model->diffModifyTableNum = $map['diffModifyTableNum'];
        }

        if (isset($map['diffPartitionNum'])) {
            $model->diffPartitionNum = $map['diffPartitionNum'];
        }

        if (isset($map['diffTableNum'])) {
            $model->diffTableNum = $map['diffTableNum'];
        }

        if (isset($map['prevVersionTime'])) {
            $model->prevVersionTime = $map['prevVersionTime'];
        }

        return $model;
    }
}

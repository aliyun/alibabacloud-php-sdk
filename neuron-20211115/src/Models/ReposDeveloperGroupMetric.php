<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ReposDeveloperGroupMetric extends Model
{
    /**
     * @var int
     */
    public $addLines;

    /**
     * @var int
     */
    public $commentLines;

    /**
     * @var int
     */
    public $commitCnt;

    /**
     * @var int
     */
    public $delLines;

    /**
     * @var int
     */
    public $modLines;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $workNo;
    protected $_name = [
        'addLines' => 'addLines',
        'commentLines' => 'commentLines',
        'commitCnt' => 'commitCnt',
        'delLines' => 'delLines',
        'modLines' => 'modLines',
        'showName' => 'showName',
        'workNo' => 'workNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addLines) {
            $res['addLines'] = $this->addLines;
        }

        if (null !== $this->commentLines) {
            $res['commentLines'] = $this->commentLines;
        }

        if (null !== $this->commitCnt) {
            $res['commitCnt'] = $this->commitCnt;
        }

        if (null !== $this->delLines) {
            $res['delLines'] = $this->delLines;
        }

        if (null !== $this->modLines) {
            $res['modLines'] = $this->modLines;
        }

        if (null !== $this->showName) {
            $res['showName'] = $this->showName;
        }

        if (null !== $this->workNo) {
            $res['workNo'] = $this->workNo;
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
        if (isset($map['addLines'])) {
            $model->addLines = $map['addLines'];
        }

        if (isset($map['commentLines'])) {
            $model->commentLines = $map['commentLines'];
        }

        if (isset($map['commitCnt'])) {
            $model->commitCnt = $map['commitCnt'];
        }

        if (isset($map['delLines'])) {
            $model->delLines = $map['delLines'];
        }

        if (isset($map['modLines'])) {
            $model->modLines = $map['modLines'];
        }

        if (isset($map['showName'])) {
            $model->showName = $map['showName'];
        }

        if (isset($map['workNo'])) {
            $model->workNo = $map['workNo'];
        }

        return $model;
    }
}

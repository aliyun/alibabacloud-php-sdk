<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $intervalTime;

    /**
     * @var string
     */
    public $lambda;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $maxNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var warningStrategyList
     */
    public $warningStrategyList;
    protected $_name = [
        'id'                  => 'Id',
        'intervalTime'        => 'IntervalTime',
        'lambda'              => 'Lambda',
        'level'               => 'Level',
        'maxNumber'           => 'MaxNumber',
        'name'                => 'Name',
        'warningStrategyList' => 'WarningStrategyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->maxNumber) {
            $res['MaxNumber'] = $this->maxNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->warningStrategyList) {
            $res['WarningStrategyList'] = null !== $this->warningStrategyList ? $this->warningStrategyList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MaxNumber'])) {
            $model->maxNumber = $map['MaxNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WarningStrategyList'])) {
            $model->warningStrategyList = warningStrategyList::fromMap($map['WarningStrategyList']);
        }

        return $model;
    }
}

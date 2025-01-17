<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SaveWhiteListStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var int
     */
    public $strategyId;
    /**
     * @var string
     */
    public $strategyName;
    /**
     * @var int
     */
    public $studyTime;
    protected $_name = [
        'lang'         => 'Lang',
        'sourceIp'     => 'SourceIp',
        'strategyId'   => 'StrategyId',
        'strategyName' => 'StrategyName',
        'studyTime'    => 'StudyTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->studyTime) {
            $res['StudyTime'] = $this->studyTime;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['StudyTime'])) {
            $model->studyTime = $map['StudyTime'];
        }

        return $model;
    }
}

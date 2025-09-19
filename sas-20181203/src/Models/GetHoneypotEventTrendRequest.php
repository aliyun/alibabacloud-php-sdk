<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetHoneypotEventTrendRequest extends Model
{
    /**
     * @var int
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var int
     */
    public $startTimeStamp;
    protected $_name = [
        'endTimeStamp' => 'EndTimeStamp',
        'lang' => 'Lang',
        'riskLevelList' => 'RiskLevelList',
        'srcIp' => 'SrcIp',
        'startTimeStamp' => 'StartTimeStamp',
    ];

    public function validate()
    {
        if (\is_array($this->riskLevelList)) {
            Model::validateArray($this->riskLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->riskLevelList) {
            if (\is_array($this->riskLevelList)) {
                $res['RiskLevelList'] = [];
                $n1 = 0;
                foreach ($this->riskLevelList as $item1) {
                    $res['RiskLevelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
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
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n1 = 0;
                foreach ($map['RiskLevelList'] as $item1) {
                    $model->riskLevelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\ListTotalSensitiveInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTotalSensitiveInfoResponseBody\dataCountDOList\dataCountDOList;
use AlibabaCloud\SDK\Sddp\V20260120\Models\ListTotalSensitiveInfoResponseBody\dataCountDOList\ruleInfoList;

class dataCountDOList extends Model
{
    /**
     * @var dataCountDOList[]
     */
    public $dataCountDOList;

    /**
     * @var int
     */
    public $date;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var ruleInfoList[]
     */
    public $ruleInfoList;

    /**
     * @var int
     */
    public $s0Count;

    /**
     * @var int
     */
    public $s10Count;

    /**
     * @var int
     */
    public $s1Count;

    /**
     * @var int
     */
    public $s2Count;

    /**
     * @var int
     */
    public $s3Count;

    /**
     * @var int
     */
    public $s4Count;

    /**
     * @var int
     */
    public $s5Count;

    /**
     * @var int
     */
    public $s6Count;

    /**
     * @var int
     */
    public $s7Count;

    /**
     * @var int
     */
    public $s8Count;

    /**
     * @var int
     */
    public $s9Count;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $structFlag;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataCountDOList' => 'DataCountDOList',
        'date' => 'Date',
        'regionId' => 'RegionId',
        'ruleInfoList' => 'RuleInfoList',
        's0Count' => 'S0Count',
        's10Count' => 'S10Count',
        's1Count' => 'S1Count',
        's2Count' => 'S2Count',
        's3Count' => 'S3Count',
        's4Count' => 'S4Count',
        's5Count' => 'S5Count',
        's6Count' => 'S6Count',
        's7Count' => 'S7Count',
        's8Count' => 'S8Count',
        's9Count' => 'S9Count',
        'sensitiveCount' => 'SensitiveCount',
        'structFlag' => 'StructFlag',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataCountDOList)) {
            Model::validateArray($this->dataCountDOList);
        }
        if (\is_array($this->ruleInfoList)) {
            Model::validateArray($this->ruleInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCountDOList) {
            if (\is_array($this->dataCountDOList)) {
                $res['DataCountDOList'] = [];
                $n1 = 0;
                foreach ($this->dataCountDOList as $item1) {
                    $res['DataCountDOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleInfoList) {
            if (\is_array($this->ruleInfoList)) {
                $res['RuleInfoList'] = [];
                $n1 = 0;
                foreach ($this->ruleInfoList as $item1) {
                    $res['RuleInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->s0Count) {
            $res['S0Count'] = $this->s0Count;
        }

        if (null !== $this->s10Count) {
            $res['S10Count'] = $this->s10Count;
        }

        if (null !== $this->s1Count) {
            $res['S1Count'] = $this->s1Count;
        }

        if (null !== $this->s2Count) {
            $res['S2Count'] = $this->s2Count;
        }

        if (null !== $this->s3Count) {
            $res['S3Count'] = $this->s3Count;
        }

        if (null !== $this->s4Count) {
            $res['S4Count'] = $this->s4Count;
        }

        if (null !== $this->s5Count) {
            $res['S5Count'] = $this->s5Count;
        }

        if (null !== $this->s6Count) {
            $res['S6Count'] = $this->s6Count;
        }

        if (null !== $this->s7Count) {
            $res['S7Count'] = $this->s7Count;
        }

        if (null !== $this->s8Count) {
            $res['S8Count'] = $this->s8Count;
        }

        if (null !== $this->s9Count) {
            $res['S9Count'] = $this->s9Count;
        }

        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }

        if (null !== $this->structFlag) {
            $res['StructFlag'] = $this->structFlag;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DataCountDOList'])) {
            if (!empty($map['DataCountDOList'])) {
                $model->dataCountDOList = [];
                $n1 = 0;
                foreach ($map['DataCountDOList'] as $item1) {
                    $model->dataCountDOList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleInfoList'])) {
            if (!empty($map['RuleInfoList'])) {
                $model->ruleInfoList = [];
                $n1 = 0;
                foreach ($map['RuleInfoList'] as $item1) {
                    $model->ruleInfoList[$n1] = ruleInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['S0Count'])) {
            $model->s0Count = $map['S0Count'];
        }

        if (isset($map['S10Count'])) {
            $model->s10Count = $map['S10Count'];
        }

        if (isset($map['S1Count'])) {
            $model->s1Count = $map['S1Count'];
        }

        if (isset($map['S2Count'])) {
            $model->s2Count = $map['S2Count'];
        }

        if (isset($map['S3Count'])) {
            $model->s3Count = $map['S3Count'];
        }

        if (isset($map['S4Count'])) {
            $model->s4Count = $map['S4Count'];
        }

        if (isset($map['S5Count'])) {
            $model->s5Count = $map['S5Count'];
        }

        if (isset($map['S6Count'])) {
            $model->s6Count = $map['S6Count'];
        }

        if (isset($map['S7Count'])) {
            $model->s7Count = $map['S7Count'];
        }

        if (isset($map['S8Count'])) {
            $model->s8Count = $map['S8Count'];
        }

        if (isset($map['S9Count'])) {
            $model->s9Count = $map['S9Count'];
        }

        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        if (isset($map['StructFlag'])) {
            $model->structFlag = $map['StructFlag'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

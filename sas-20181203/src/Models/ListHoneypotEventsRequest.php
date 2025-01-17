<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListHoneypotEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentIdList;
    /**
     * @var int
     */
    public $alarmEventId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string[]
     */
    public $honeypotIdList;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $portraitId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $riskLevelList;
    /**
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'agentIdList'    => 'AgentIdList',
        'alarmEventId'   => 'AlarmEventId',
        'currentPage'    => 'CurrentPage',
        'dealed'         => 'Dealed',
        'honeypotIdList' => 'HoneypotIdList',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'portraitId'     => 'PortraitId',
        'requestId'      => 'RequestId',
        'riskLevelList'  => 'RiskLevelList',
        'srcIp'          => 'SrcIp',
    ];

    public function validate()
    {
        if (\is_array($this->agentIdList)) {
            Model::validateArray($this->agentIdList);
        }
        if (\is_array($this->honeypotIdList)) {
            Model::validateArray($this->honeypotIdList);
        }
        if (\is_array($this->riskLevelList)) {
            Model::validateArray($this->riskLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIdList) {
            if (\is_array($this->agentIdList)) {
                $res['AgentIdList'] = [];
                $n1                 = 0;
                foreach ($this->agentIdList as $item1) {
                    $res['AgentIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->alarmEventId) {
            $res['AlarmEventId'] = $this->alarmEventId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->honeypotIdList) {
            if (\is_array($this->honeypotIdList)) {
                $res['HoneypotIdList'] = [];
                $n1                    = 0;
                foreach ($this->honeypotIdList as $item1) {
                    $res['HoneypotIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->portraitId) {
            $res['PortraitId'] = $this->portraitId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskLevelList) {
            if (\is_array($this->riskLevelList)) {
                $res['RiskLevelList'] = [];
                $n1                   = 0;
                foreach ($this->riskLevelList as $item1) {
                    $res['RiskLevelList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
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
        if (isset($map['AgentIdList'])) {
            if (!empty($map['AgentIdList'])) {
                $model->agentIdList = [];
                $n1                 = 0;
                foreach ($map['AgentIdList'] as $item1) {
                    $model->agentIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AlarmEventId'])) {
            $model->alarmEventId = $map['AlarmEventId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['HoneypotIdList'])) {
            if (!empty($map['HoneypotIdList'])) {
                $model->honeypotIdList = [];
                $n1                    = 0;
                foreach ($map['HoneypotIdList'] as $item1) {
                    $model->honeypotIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PortraitId'])) {
            $model->portraitId = $map['PortraitId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n1                   = 0;
                foreach ($map['RiskLevelList'] as $item1) {
                    $model->riskLevelList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}

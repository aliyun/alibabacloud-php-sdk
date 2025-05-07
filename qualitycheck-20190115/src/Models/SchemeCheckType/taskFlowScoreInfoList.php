<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\taskFlowScoreInfoList\schemeScoreInfoList;

class taskFlowScoreInfoList extends Model
{
    /**
     * @var schemeScoreInfoList[]
     */
    public $schemeScoreInfoList;

    /**
     * @var int
     */
    public $taskFlowId;

    /**
     * @var string
     */
    public $taskFlowName;

    /**
     * @var int
     */
    public $taskFlowType;
    protected $_name = [
        'schemeScoreInfoList' => 'SchemeScoreInfoList',
        'taskFlowId' => 'TaskFlowId',
        'taskFlowName' => 'TaskFlowName',
        'taskFlowType' => 'TaskFlowType',
    ];

    public function validate()
    {
        if (\is_array($this->schemeScoreInfoList)) {
            Model::validateArray($this->schemeScoreInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemeScoreInfoList) {
            if (\is_array($this->schemeScoreInfoList)) {
                $res['SchemeScoreInfoList'] = [];
                $n1 = 0;
                foreach ($this->schemeScoreInfoList as $item1) {
                    $res['SchemeScoreInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
        }

        if (null !== $this->taskFlowName) {
            $res['TaskFlowName'] = $this->taskFlowName;
        }

        if (null !== $this->taskFlowType) {
            $res['TaskFlowType'] = $this->taskFlowType;
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
        if (isset($map['SchemeScoreInfoList'])) {
            if (!empty($map['SchemeScoreInfoList'])) {
                $model->schemeScoreInfoList = [];
                $n1 = 0;
                foreach ($map['SchemeScoreInfoList'] as $item1) {
                    $model->schemeScoreInfoList[$n1++] = schemeScoreInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }

        if (isset($map['TaskFlowName'])) {
            $model->taskFlowName = $map['TaskFlowName'];
        }

        if (isset($map['TaskFlowType'])) {
            $model->taskFlowType = $map['TaskFlowType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SchemeCheckType\taskFlowScoreInfoList\schemeScoreInfoList;
use AlibabaCloud\Tea\Model;

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
        'taskFlowId'          => 'TaskFlowId',
        'taskFlowName'        => 'TaskFlowName',
        'taskFlowType'        => 'TaskFlowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeScoreInfoList) {
            $res['SchemeScoreInfoList'] = [];
            if (null !== $this->schemeScoreInfoList && \is_array($this->schemeScoreInfoList)) {
                $n = 0;
                foreach ($this->schemeScoreInfoList as $item) {
                    $res['SchemeScoreInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return taskFlowScoreInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemeScoreInfoList'])) {
            if (!empty($map['SchemeScoreInfoList'])) {
                $model->schemeScoreInfoList = [];
                $n                          = 0;
                foreach ($map['SchemeScoreInfoList'] as $item) {
                    $model->schemeScoreInfoList[$n++] = null !== $item ? schemeScoreInfoList::fromMap($item) : $item;
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

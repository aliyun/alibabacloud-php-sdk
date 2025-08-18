<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest\executeCommand\paramList;

class executeCommand extends Model
{
    /**
     * @var string
     */
    public $endBizDate;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var paramList[]
     */
    public $paramList;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'endBizDate' => 'EndBizDate',
        'flowName' => 'FlowName',
        'nodeId' => 'NodeId',
        'paramList' => 'ParamList',
        'projectId' => 'ProjectId',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate()
    {
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1 = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
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
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1 = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1] = paramList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}

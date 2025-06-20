<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest\approveFlowParam;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest\approveFlowParam\approveNodes\approverDTO;

class approveNodes extends Model
{
    /**
     * @var approverDTO[]
     */
    public $approverDTO;

    /**
     * @var int
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var int
     */
    public $processNodeOrder;

    /**
     * @var int
     */
    public $strategy;
    protected $_name = [
        'approverDTO' => 'ApproverDTO',
        'nodeStatus' => 'NodeStatus',
        'processName' => 'ProcessName',
        'processNodeOrder' => 'ProcessNodeOrder',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->approverDTO)) {
            Model::validateArray($this->approverDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approverDTO) {
            if (\is_array($this->approverDTO)) {
                $res['ApproverDTO'] = [];
                $n1 = 0;
                foreach ($this->approverDTO as $item1) {
                    $res['ApproverDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processNodeOrder) {
            $res['ProcessNodeOrder'] = $this->processNodeOrder;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['ApproverDTO'])) {
            if (!empty($map['ApproverDTO'])) {
                $model->approverDTO = [];
                $n1 = 0;
                foreach ($map['ApproverDTO'] as $item1) {
                    $model->approverDTO[$n1] = approverDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessNodeOrder'])) {
            $model->processNodeOrder = $map['ProcessNodeOrder'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}

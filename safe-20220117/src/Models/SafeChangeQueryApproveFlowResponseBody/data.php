<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryApproveFlowResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $approveStrategy;

    /**
     * @var string
     */
    public $approver;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeStatus;
    protected $_name = [
        'approveStrategy' => 'ApproveStrategy',
        'approver' => 'Approver',
        'nodeName' => 'NodeName',
        'nodeStatus' => 'NodeStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveStrategy) {
            $res['ApproveStrategy'] = $this->approveStrategy;
        }

        if (null !== $this->approver) {
            $res['Approver'] = $this->approver;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
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
        if (isset($map['ApproveStrategy'])) {
            $model->approveStrategy = $map['ApproveStrategy'];
        }

        if (isset($map['Approver'])) {
            $model->approver = $map['Approver'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        return $model;
    }
}

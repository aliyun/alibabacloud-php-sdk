<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckShrinkRequest\approveFlowParam\approveNodes;

use AlibabaCloud\Dara\Model;

class approverDTO extends Model
{
    /**
     * @var string
     */
    public $approveDesc;

    /**
     * @var string
     */
    public $approveTime;

    /**
     * @var string
     */
    public $approverId;

    /**
     * @var string
     */
    public $approverName;

    /**
     * @var int
     */
    public $opinion;
    protected $_name = [
        'approveDesc' => 'ApproveDesc',
        'approveTime' => 'ApproveTime',
        'approverId' => 'ApproverId',
        'approverName' => 'ApproverName',
        'opinion' => 'Opinion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveDesc) {
            $res['ApproveDesc'] = $this->approveDesc;
        }

        if (null !== $this->approveTime) {
            $res['ApproveTime'] = $this->approveTime;
        }

        if (null !== $this->approverId) {
            $res['ApproverId'] = $this->approverId;
        }

        if (null !== $this->approverName) {
            $res['ApproverName'] = $this->approverName;
        }

        if (null !== $this->opinion) {
            $res['Opinion'] = $this->opinion;
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
        if (isset($map['ApproveDesc'])) {
            $model->approveDesc = $map['ApproveDesc'];
        }

        if (isset($map['ApproveTime'])) {
            $model->approveTime = $map['ApproveTime'];
        }

        if (isset($map['ApproverId'])) {
            $model->approverId = $map['ApproverId'];
        }

        if (isset($map['ApproverName'])) {
            $model->approverName = $map['ApproverName'];
        }

        if (isset($map['Opinion'])) {
            $model->opinion = $map['Opinion'];
        }

        return $model;
    }
}

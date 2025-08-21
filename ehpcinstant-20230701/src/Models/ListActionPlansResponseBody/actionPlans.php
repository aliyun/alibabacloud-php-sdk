<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListActionPlansResponseBody;

use AlibabaCloud\Dara\Model;

class actionPlans extends Model
{
    /**
     * @var string
     */
    public $actionPlanId;

    /**
     * @var string
     */
    public $actionPlanName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'actionPlanId' => 'ActionPlanId',
        'actionPlanName' => 'ActionPlanName',
        'createTime' => 'CreateTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanId) {
            $res['ActionPlanId'] = $this->actionPlanId;
        }

        if (null !== $this->actionPlanName) {
            $res['ActionPlanName'] = $this->actionPlanName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ActionPlanId'])) {
            $model->actionPlanId = $map['ActionPlanId'];
        }

        if (isset($map['ActionPlanName'])) {
            $model->actionPlanName = $map['ActionPlanName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}

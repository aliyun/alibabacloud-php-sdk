<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $changeTime;

    /**
     * @var string
     */
    public $creditChange;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'changeTime' => 'ChangeTime',
        'creditChange' => 'CreditChange',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'packageId' => 'PackageId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeTime) {
            $res['ChangeTime'] = $this->changeTime;
        }

        if (null !== $this->creditChange) {
            $res['CreditChange'] = $this->creditChange;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ChangeTime'])) {
            $model->changeTime = $map['ChangeTime'];
        }

        if (isset($map['CreditChange'])) {
            $model->creditChange = $map['CreditChange'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

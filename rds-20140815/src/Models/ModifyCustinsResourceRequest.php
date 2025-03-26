<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustinsResourceRequest extends Model
{
    /**
     * @var string
     */
    public $adjustDeadline;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $increaseRatio;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $restoreOriginalSpecification;

    /**
     * @var int
     */
    public $targetValue;
    protected $_name = [
        'adjustDeadline' => 'AdjustDeadline',
        'DBInstanceId' => 'DBInstanceId',
        'increaseRatio' => 'IncreaseRatio',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'restoreOriginalSpecification' => 'RestoreOriginalSpecification',
        'targetValue' => 'TargetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustDeadline) {
            $res['AdjustDeadline'] = $this->adjustDeadline;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->increaseRatio) {
            $res['IncreaseRatio'] = $this->increaseRatio;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->restoreOriginalSpecification) {
            $res['RestoreOriginalSpecification'] = $this->restoreOriginalSpecification;
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['AdjustDeadline'])) {
            $model->adjustDeadline = $map['AdjustDeadline'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['IncreaseRatio'])) {
            $model->increaseRatio = $map['IncreaseRatio'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RestoreOriginalSpecification'])) {
            $model->restoreOriginalSpecification = $map['RestoreOriginalSpecification'];
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}

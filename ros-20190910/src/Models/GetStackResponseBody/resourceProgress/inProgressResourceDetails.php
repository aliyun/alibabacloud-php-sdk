<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;

use AlibabaCloud\Dara\Model;

class inProgressResourceDetails extends Model
{
    /**
     * @var float
     */
    public $progressTargetValue;
    /**
     * @var float
     */
    public $progressValue;
    /**
     * @var string
     */
    public $resourceName;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'progressTargetValue' => 'ProgressTargetValue',
        'progressValue'       => 'ProgressValue',
        'resourceName'        => 'ResourceName',
        'resourceType'        => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->progressTargetValue) {
            $res['ProgressTargetValue'] = $this->progressTargetValue;
        }

        if (null !== $this->progressValue) {
            $res['ProgressValue'] = $this->progressValue;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ProgressTargetValue'])) {
            $model->progressTargetValue = $map['ProgressTargetValue'];
        }

        if (isset($map['ProgressValue'])) {
            $model->progressValue = $map['ProgressValue'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

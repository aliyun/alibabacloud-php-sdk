<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;

use AlibabaCloud\Tea\Model;

class inProgressResourceDetails extends Model
{
    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var float
     */
    public $progressValue;

    /**
     * @var float
     */
    public $progressTargetValue;
    protected $_name = [
        'resourceName'        => 'ResourceName',
        'resourceType'        => 'ResourceType',
        'progressValue'       => 'ProgressValue',
        'progressTargetValue' => 'ProgressTargetValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->progressValue) {
            $res['ProgressValue'] = $this->progressValue;
        }
        if (null !== $this->progressTargetValue) {
            $res['ProgressTargetValue'] = $this->progressTargetValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inProgressResourceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ProgressValue'])) {
            $model->progressValue = $map['ProgressValue'];
        }
        if (isset($map['ProgressTargetValue'])) {
            $model->progressTargetValue = $map['ProgressTargetValue'];
        }

        return $model;
    }
}

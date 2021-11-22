<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\resourceProgress;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return inProgressResourceDetails
     */
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

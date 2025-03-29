<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateScanResultFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $queryRequestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'feedback' => 'Feedback',
        'queryRequestId' => 'QueryRequestId',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->queryRequestId) {
            $res['QueryRequestId'] = $this->queryRequestId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['QueryRequestId'])) {
            $model->queryRequestId = $map['QueryRequestId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

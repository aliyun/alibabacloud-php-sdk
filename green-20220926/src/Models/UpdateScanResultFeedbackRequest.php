<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateScanResultFeedbackRequest extends Model
{
    /**
     * @example missOut
     *
     * @var string
     */
    public $feedback;

    /**
     * @example 46232656-984E-****-A648-B1D0667B6C3E
     *
     * @var string
     */
    public $queryRequestId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'feedback' => 'Feedback',
        'queryRequestId' => 'QueryRequestId',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateScanResultFeedbackRequest
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models\ListLabTokensResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $finishStatus;

    /**
     * @var string
     */
    public $labId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $resourceActualReleaseTime;

    /**
     * @var string
     */
    public $resourcePlanedReleaseTime;

    /**
     * @var int
     */
    public $resourceStatus;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime'                => 'CreateTime',
        'finishStatus'              => 'FinishStatus',
        'labId'                     => 'LabId',
        'orderId'                   => 'OrderId',
        'resourceActualReleaseTime' => 'ResourceActualReleaseTime',
        'resourcePlanedReleaseTime' => 'ResourcePlanedReleaseTime',
        'resourceStatus'            => 'ResourceStatus',
        'url'                       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->resourceActualReleaseTime) {
            $res['ResourceActualReleaseTime'] = $this->resourceActualReleaseTime;
        }
        if (null !== $this->resourcePlanedReleaseTime) {
            $res['ResourcePlanedReleaseTime'] = $this->resourcePlanedReleaseTime;
        }
        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ResourceActualReleaseTime'])) {
            $model->resourceActualReleaseTime = $map['ResourceActualReleaseTime'];
        }
        if (isset($map['ResourcePlanedReleaseTime'])) {
            $model->resourcePlanedReleaseTime = $map['ResourcePlanedReleaseTime'];
        }
        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}

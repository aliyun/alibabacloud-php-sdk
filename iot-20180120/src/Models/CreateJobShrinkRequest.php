<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobDocument;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $jobFileShrink;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $timeoutConfigShrink;

    /**
     * @var string
     */
    public $rolloutConfigShrink;

    /**
     * @var string
     */
    public $targetConfigShrink;
    protected $_name = [
        'apiProduct'          => 'ApiProduct',
        'apiRevision'         => 'ApiRevision',
        'iotInstanceId'       => 'IotInstanceId',
        'description'         => 'Description',
        'jobDocument'         => 'JobDocument',
        'type'                => 'Type',
        'jobFileShrink'       => 'JobFile',
        'jobName'             => 'JobName',
        'timeoutConfigShrink' => 'TimeoutConfig',
        'rolloutConfigShrink' => 'RolloutConfig',
        'targetConfigShrink'  => 'TargetConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->jobFileShrink) {
            $res['JobFile'] = $this->jobFileShrink;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->timeoutConfigShrink) {
            $res['TimeoutConfig'] = $this->timeoutConfigShrink;
        }
        if (null !== $this->rolloutConfigShrink) {
            $res['RolloutConfig'] = $this->rolloutConfigShrink;
        }
        if (null !== $this->targetConfigShrink) {
            $res['TargetConfig'] = $this->targetConfigShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['JobFile'])) {
            $model->jobFileShrink = $map['JobFile'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfigShrink = $map['TimeoutConfig'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfigShrink = $map['RolloutConfig'];
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfigShrink = $map['TargetConfig'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CopyThingModelRequest extends Model
{
    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example V1.0.0
     *
     * @var string
     */
    public $sourceModelVersion;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $sourceProductKey;

    /**
     * @example a1BwwG0****
     *
     * @var string
     */
    public $targetProductKey;
    protected $_name = [
        'iotInstanceId'      => 'IotInstanceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'sourceModelVersion' => 'SourceModelVersion',
        'sourceProductKey'   => 'SourceProductKey',
        'targetProductKey'   => 'TargetProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceModelVersion) {
            $res['SourceModelVersion'] = $this->sourceModelVersion;
        }
        if (null !== $this->sourceProductKey) {
            $res['SourceProductKey'] = $this->sourceProductKey;
        }
        if (null !== $this->targetProductKey) {
            $res['TargetProductKey'] = $this->targetProductKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyThingModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceModelVersion'])) {
            $model->sourceModelVersion = $map['SourceModelVersion'];
        }
        if (isset($map['SourceProductKey'])) {
            $model->sourceProductKey = $map['SourceProductKey'];
        }
        if (isset($map['TargetProductKey'])) {
            $model->targetProductKey = $map['TargetProductKey'];
        }

        return $model;
    }
}

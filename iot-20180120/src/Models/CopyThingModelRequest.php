<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CopyThingModelRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceProductKey;

    /**
     * @var string
     */
    public $targetProductKey;

    /**
     * @var string
     */
    public $sourceModelVersion;
    protected $_name = [
        'iotInstanceId'      => 'IotInstanceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'sourceProductKey'   => 'SourceProductKey',
        'targetProductKey'   => 'TargetProductKey',
        'sourceModelVersion' => 'SourceModelVersion',
    ];

    public function validate()
    {
        Model::validateRequired('sourceProductKey', $this->sourceProductKey, true);
        Model::validateRequired('targetProductKey', $this->targetProductKey, true);
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
        if (null !== $this->sourceProductKey) {
            $res['SourceProductKey'] = $this->sourceProductKey;
        }
        if (null !== $this->targetProductKey) {
            $res['TargetProductKey'] = $this->targetProductKey;
        }
        if (null !== $this->sourceModelVersion) {
            $res['SourceModelVersion'] = $this->sourceModelVersion;
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
        if (isset($map['SourceProductKey'])) {
            $model->sourceProductKey = $map['SourceProductKey'];
        }
        if (isset($map['TargetProductKey'])) {
            $model->targetProductKey = $map['TargetProductKey'];
        }
        if (isset($map['SourceModelVersion'])) {
            $model->sourceModelVersion = $map['SourceModelVersion'];
        }

        return $model;
    }
}

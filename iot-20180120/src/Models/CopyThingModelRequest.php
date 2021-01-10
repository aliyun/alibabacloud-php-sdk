<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CopyThingModelRequest extends Model
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

    /**
     * @var string
     */
    public $realTenantId;

    /**
     * @var string
     */
    public $realTripartiteKey;
    protected $_name = [
        'apiProduct'         => 'ApiProduct',
        'apiRevision'        => 'ApiRevision',
        'iotInstanceId'      => 'IotInstanceId',
        'resourceGroupId'    => 'ResourceGroupId',
        'sourceProductKey'   => 'SourceProductKey',
        'targetProductKey'   => 'TargetProductKey',
        'sourceModelVersion' => 'SourceModelVersion',
        'realTenantId'       => 'RealTenantId',
        'realTripartiteKey'  => 'RealTripartiteKey',
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
        if (null !== $this->realTenantId) {
            $res['RealTenantId'] = $this->realTenantId;
        }
        if (null !== $this->realTripartiteKey) {
            $res['RealTripartiteKey'] = $this->realTripartiteKey;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
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
        if (isset($map['RealTenantId'])) {
            $model->realTenantId = $map['RealTenantId'];
        }
        if (isset($map['RealTripartiteKey'])) {
            $model->realTripartiteKey = $map['RealTripartiteKey'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyAttestorRequest extends Model
{
    /**
     * @description The ID of the KMS key.
     *
     * @example key-********
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The region ID of the Key Management Service (KMS) key.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $keyRegionId;

    /**
     * @description The version ID of the KMS key.
     *
     * @example key-****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The name of the witness.
     *
     * @example attestor-auto-ad5316
     *
     * @var string
     */
    public $name;

    /**
     * @description The description.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'keyId' => 'KeyId',
        'keyRegionId' => 'KeyRegionId',
        'keyVersionId' => 'KeyVersionId',
        'name' => 'Name',
        'remark' => 'Remark',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyRegionId) {
            $res['KeyRegionId'] = $this->keyRegionId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAttestorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyRegionId'])) {
            $model->keyRegionId = $map['KeyRegionId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

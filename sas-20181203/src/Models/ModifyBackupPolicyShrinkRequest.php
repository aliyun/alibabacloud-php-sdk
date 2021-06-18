<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyShrink;

    /**
     * @var string
     */
    public $policyVersion;

    /**
     * @var string
     */
    public $policyRegionId;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'id'              => 'Id',
        'name'            => 'Name',
        'policyShrink'    => 'Policy',
        'policyVersion'   => 'PolicyVersion',
        'policyRegionId'  => 'PolicyRegionId',
        'uuidList'        => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}

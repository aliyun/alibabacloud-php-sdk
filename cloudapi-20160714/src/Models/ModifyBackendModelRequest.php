<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackendModelRequest extends Model
{
    /**
     * @var string
     */
    public $backendId;
    /**
     * @var string
     */
    public $backendModelData;
    /**
     * @var string
     */
    public $backendModelId;
    /**
     * @var string
     */
    public $backendType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'backendId'        => 'BackendId',
        'backendModelData' => 'BackendModelData',
        'backendModelId'   => 'BackendModelId',
        'backendType'      => 'BackendType',
        'description'      => 'Description',
        'securityToken'    => 'SecurityToken',
        'stageName'        => 'StageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }

        if (null !== $this->backendModelData) {
            $res['BackendModelData'] = $this->backendModelData;
        }

        if (null !== $this->backendModelId) {
            $res['BackendModelId'] = $this->backendModelId;
        }

        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }

        if (isset($map['BackendModelData'])) {
            $model->backendModelData = $map['BackendModelData'];
        }

        if (isset($map['BackendModelId'])) {
            $model->backendModelId = $map['BackendModelId'];
        }

        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}

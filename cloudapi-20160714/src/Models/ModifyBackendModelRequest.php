<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackendModelRequest extends Model
{
    /**
     * @description The ID of the backend service.
     *
     * @example 20bcdc9453524b78a8beb1f6de21edb7
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The information about the backend model.
     *
     * @example {\"ServiceAddress\":\"http://121.40.XX.XX\"}
     *
     * @var string
     */
    public $backendModelData;

    /**
     * @description The ID of the backend model.
     *
     * @example 3bb6375bc71c4e4c95ce05b4e7a55a9d
     *
     * @var string
     */
    public $backendModelId;

    /**
     * @description The type of the backend service.
     *
     * @example OSS
     *
     * @var string
     */
    public $backendType;

    /**
     * @description The definition of the backend model.
     *
     * @example modify plugin first
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **PRE**
     *   **TEST**
     *
     * @example TEST
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyBackendModelRequest
     */
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

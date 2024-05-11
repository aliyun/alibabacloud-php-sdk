<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackendModelRequest extends Model
{
    /**
     * @example 20bcdc9453524b78a8beb1f6de21edb7
     *
     * @var string
     */
    public $backendId;

    /**
     * @description This parameter is required.
     *
     * @example 4be6b110b7aa40b0bf0c83cc00b3bd86
     *
     * @var string
     */
    public $backendModelId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'backendId'      => 'BackendId',
        'backendModelId' => 'BackendModelId',
        'securityToken'  => 'SecurityToken',
        'stageName'      => 'StageName',
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
        if (null !== $this->backendModelId) {
            $res['BackendModelId'] = $this->backendModelId;
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
     * @return DeleteBackendModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['BackendModelId'])) {
            $model->backendModelId = $map['BackendModelId'];
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

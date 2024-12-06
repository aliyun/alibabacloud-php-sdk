<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateLogConfigRequest extends Model
{
    /**
     * @description Specifies to create a service-linked role.
     *
     * @example true
     *
     * @var bool
     */
    public $createSlr;

    /**
     * @description The log type.
     *
     * Valid values:
     *
     *   PROVIDER
     *
     * @example PROVIDER
     *
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description slslogstore
     *
     * This parameter is required.
     * @example api-gateway
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @description The name of the Log Service project.
     *
     * This parameter is required.
     * @example rec-lq-sls
     *
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'createSlr'     => 'CreateSlr',
        'logType'       => 'LogType',
        'securityToken' => 'SecurityToken',
        'slsLogStore'   => 'SlsLogStore',
        'slsProject'    => 'SlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSlr) {
            $res['CreateSlr'] = $this->createSlr;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateSlr'])) {
            $model->createSlr = $map['CreateSlr'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}

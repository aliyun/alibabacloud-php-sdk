<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SynchronizeGroupConfigRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $conflictSyncPolicy;

    /**
     * @var string
     */
    public $newSyncPolicy;

    /**
     * @var string
     */
    public $backendSyncPolicy;

    /**
     * @var string[]
     */
    public $conflictInclude;

    /**
     * @var string[]
     */
    public $conflictExclude;

    /**
     * @var string[]
     */
    public $newInclude;

    /**
     * @var string[]
     */
    public $newExclude;

    /**
     * @var string[]
     */
    public $backendInclude;

    /**
     * @var string[]
     */
    public $backendExclude;
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'flowId'             => 'FlowId',
        'conflictSyncPolicy' => 'ConflictSyncPolicy',
        'newSyncPolicy'      => 'NewSyncPolicy',
        'backendSyncPolicy'  => 'BackendSyncPolicy',
        'conflictInclude'    => 'ConflictInclude',
        'conflictExclude'    => 'ConflictExclude',
        'newInclude'         => 'NewInclude',
        'newExclude'         => 'NewExclude',
        'backendInclude'     => 'BackendInclude',
        'backendExclude'     => 'BackendExclude',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->conflictSyncPolicy) {
            $res['ConflictSyncPolicy'] = $this->conflictSyncPolicy;
        }
        if (null !== $this->newSyncPolicy) {
            $res['NewSyncPolicy'] = $this->newSyncPolicy;
        }
        if (null !== $this->backendSyncPolicy) {
            $res['BackendSyncPolicy'] = $this->backendSyncPolicy;
        }
        if (null !== $this->conflictInclude) {
            $res['ConflictInclude'] = $this->conflictInclude;
        }
        if (null !== $this->conflictExclude) {
            $res['ConflictExclude'] = $this->conflictExclude;
        }
        if (null !== $this->newInclude) {
            $res['NewInclude'] = $this->newInclude;
        }
        if (null !== $this->newExclude) {
            $res['NewExclude'] = $this->newExclude;
        }
        if (null !== $this->backendInclude) {
            $res['BackendInclude'] = $this->backendInclude;
        }
        if (null !== $this->backendExclude) {
            $res['BackendExclude'] = $this->backendExclude;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SynchronizeGroupConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ConflictSyncPolicy'])) {
            $model->conflictSyncPolicy = $map['ConflictSyncPolicy'];
        }
        if (isset($map['NewSyncPolicy'])) {
            $model->newSyncPolicy = $map['NewSyncPolicy'];
        }
        if (isset($map['BackendSyncPolicy'])) {
            $model->backendSyncPolicy = $map['BackendSyncPolicy'];
        }
        if (isset($map['ConflictInclude'])) {
            if (!empty($map['ConflictInclude'])) {
                $model->conflictInclude = $map['ConflictInclude'];
            }
        }
        if (isset($map['ConflictExclude'])) {
            if (!empty($map['ConflictExclude'])) {
                $model->conflictExclude = $map['ConflictExclude'];
            }
        }
        if (isset($map['NewInclude'])) {
            if (!empty($map['NewInclude'])) {
                $model->newInclude = $map['NewInclude'];
            }
        }
        if (isset($map['NewExclude'])) {
            if (!empty($map['NewExclude'])) {
                $model->newExclude = $map['NewExclude'];
            }
        }
        if (isset($map['BackendInclude'])) {
            if (!empty($map['BackendInclude'])) {
                $model->backendInclude = $map['BackendInclude'];
            }
        }
        if (isset($map['BackendExclude'])) {
            if (!empty($map['BackendExclude'])) {
                $model->backendExclude = $map['BackendExclude'];
            }
        }

        return $model;
    }
}

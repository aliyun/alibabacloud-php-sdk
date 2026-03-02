<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronAppMobi extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $artifactUrl;

    /**
     * @var string
     */
    public $commitId;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mobiUserId;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storeUrl;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId' => 'appId',
        'artifactUrl' => 'artifactUrl',
        'commitId' => 'commitId',
        'enterpriseId' => 'enterpriseId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'mobiUserId' => 'mobiUserId',
        'moduleId' => 'moduleId',
        'moduleName' => 'moduleName',
        'schemaVersion' => 'schemaVersion',
        'status' => 'status',
        'storeUrl' => 'storeUrl',
        'token' => 'token',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->artifactUrl) {
            $res['artifactUrl'] = $this->artifactUrl;
        }

        if (null !== $this->commitId) {
            $res['commitId'] = $this->commitId;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->mobiUserId) {
            $res['mobiUserId'] = $this->mobiUserId;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->storeUrl) {
            $res['storeUrl'] = $this->storeUrl;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['artifactUrl'])) {
            $model->artifactUrl = $map['artifactUrl'];
        }

        if (isset($map['commitId'])) {
            $model->commitId = $map['commitId'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['mobiUserId'])) {
            $model->mobiUserId = $map['mobiUserId'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['storeUrl'])) {
            $model->storeUrl = $map['storeUrl'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleTemplate extends Model
{
    /**
     * @var string
     */
    public $alertType;

    /**
     * @var int
     */
    public $applyCount;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $datasource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isSystem;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $ruleConfigs;

    /**
     * @var string
     */
    public $scenes;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertType' => 'alertType',
        'applyCount' => 'applyCount',
        'bizType' => 'bizType',
        'datasource' => 'datasource',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'isSystem' => 'isSystem',
        'labels' => 'labels',
        'ruleConfigs' => 'ruleConfigs',
        'scenes' => 'scenes',
        'schemaVersion' => 'schemaVersion',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'subType' => 'subType',
        'templateName' => 'templateName',
        'userId' => 'userId',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['alertType'] = $this->alertType;
        }

        if (null !== $this->applyCount) {
            $res['applyCount'] = $this->applyCount;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->datasource) {
            $res['datasource'] = $this->datasource;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->isSystem) {
            $res['isSystem'] = $this->isSystem;
        }

        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }

        if (null !== $this->ruleConfigs) {
            $res['ruleConfigs'] = $this->ruleConfigs;
        }

        if (null !== $this->scenes) {
            $res['scenes'] = $this->scenes;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if (isset($map['alertType'])) {
            $model->alertType = $map['alertType'];
        }

        if (isset($map['applyCount'])) {
            $model->applyCount = $map['applyCount'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['datasource'])) {
            $model->datasource = $map['datasource'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['isSystem'])) {
            $model->isSystem = $map['isSystem'];
        }

        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }

        if (isset($map['ruleConfigs'])) {
            $model->ruleConfigs = $map['ruleConfigs'];
        }

        if (isset($map['scenes'])) {
            $model->scenes = $map['scenes'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertEventIntegrationPolicyForView extends Model
{
    /**
     * @var string
     */
    public $alertEventIntegrationPolicyId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $alertEventIntegrationPolicyName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $integrationSetting;

    /**
     * @var string
     */
    public $token;

    /**
     * @var TransformAction[]
     */
    public $transformerSetting;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'alertEventIntegrationPolicyId' => 'alertEventIntegrationPolicyId',
        'alertEventIntegrationPolicyName' => 'alertEventIntegrationPolicyName',
        'createTime' => 'createTime',
        'description' => 'description',
        'enable' => 'enable',
        'filterSetting' => 'filterSetting',
        'integrationSetting' => 'integrationSetting',
        'token' => 'token',
        'transformerSetting' => 'transformerSetting',
        'type' => 'type',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEventIntegrationPolicyId) {
            $res['alertEventIntegrationPolicyId'] = $this->alertEventIntegrationPolicyId;
        }
        if (null !== $this->alertEventIntegrationPolicyName) {
            $res['alertEventIntegrationPolicyName'] = $this->alertEventIntegrationPolicyName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->integrationSetting) {
            $res['integrationSetting'] = $this->integrationSetting;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->transformerSetting) {
            $res['transformerSetting'] = [];
            if (null !== $this->transformerSetting && \is_array($this->transformerSetting)) {
                $n = 0;
                foreach ($this->transformerSetting as $item) {
                    $res['transformerSetting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertEventIntegrationPolicyForView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertEventIntegrationPolicyId'])) {
            $model->alertEventIntegrationPolicyId = $map['alertEventIntegrationPolicyId'];
        }
        if (isset($map['alertEventIntegrationPolicyName'])) {
            $model->alertEventIntegrationPolicyName = $map['alertEventIntegrationPolicyName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['integrationSetting'])) {
            $model->integrationSetting = $map['integrationSetting'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['transformerSetting'])) {
            if (!empty($map['transformerSetting'])) {
                $model->transformerSetting = [];
                $n = 0;
                foreach ($map['transformerSetting'] as $item) {
                    $model->transformerSetting[$n++] = null !== $item ? TransformAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

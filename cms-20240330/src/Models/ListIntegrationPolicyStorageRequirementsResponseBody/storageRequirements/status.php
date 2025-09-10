<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements;

use AlibabaCloud\Dara\Model;

class status extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $interUrl;

    /**
     * @var string
     */
    public $intraUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $promMetricStore;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'instanceId' => 'instanceId',
        'interUrl' => 'interUrl',
        'intraUrl' => 'intraUrl',
        'name' => 'name',
        'project' => 'project',
        'promMetricStore' => 'promMetricStore',
        'region' => 'region',
        'storageType' => 'storageType',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->interUrl) {
            $res['interUrl'] = $this->interUrl;
        }

        if (null !== $this->intraUrl) {
            $res['intraUrl'] = $this->intraUrl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->promMetricStore) {
            $res['promMetricStore'] = $this->promMetricStore;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['interUrl'])) {
            $model->interUrl = $map['interUrl'];
        }

        if (isset($map['intraUrl'])) {
            $model->intraUrl = $map['intraUrl'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['promMetricStore'])) {
            $model->promMetricStore = $map['promMetricStore'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorGroupResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorGroupResponseBody\data\records\citeList;

class records extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $autoScale;

    /**
     * @var citeList[]
     */
    public $citeList;

    /**
     * @var string
     */
    public $cmsWorkspaceId;

    /**
     * @var int
     */
    public $currentJobs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var int
     */
    public $maxJobs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $resolvedWorkers;

    /**
     * @var int
     */
    public $workerId;

    /**
     * @var string
     */
    public $workerType;

    /**
     * @var string
     */
    public $workers;

    /**
     * @var string
     */
    public $XAttrs;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'authType' => 'AuthType',
        'autoScale' => 'AutoScale',
        'citeList' => 'CiteList',
        'cmsWorkspaceId' => 'CmsWorkspaceId',
        'currentJobs' => 'CurrentJobs',
        'description' => 'Description',
        'integrationType' => 'IntegrationType',
        'maxJobs' => 'MaxJobs',
        'name' => 'Name',
        'network' => 'Network',
        'protocol' => 'Protocol',
        'resolvedWorkers' => 'ResolvedWorkers',
        'workerId' => 'WorkerId',
        'workerType' => 'WorkerType',
        'workers' => 'Workers',
        'XAttrs' => 'XAttrs',
    ];

    public function validate()
    {
        if (\is_array($this->citeList)) {
            Model::validateArray($this->citeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->autoScale) {
            $res['AutoScale'] = $this->autoScale;
        }

        if (null !== $this->citeList) {
            if (\is_array($this->citeList)) {
                $res['CiteList'] = [];
                $n1 = 0;
                foreach ($this->citeList as $item1) {
                    $res['CiteList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cmsWorkspaceId) {
            $res['CmsWorkspaceId'] = $this->cmsWorkspaceId;
        }

        if (null !== $this->currentJobs) {
            $res['CurrentJobs'] = $this->currentJobs;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }

        if (null !== $this->maxJobs) {
            $res['MaxJobs'] = $this->maxJobs;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->resolvedWorkers) {
            $res['ResolvedWorkers'] = $this->resolvedWorkers;
        }

        if (null !== $this->workerId) {
            $res['WorkerId'] = $this->workerId;
        }

        if (null !== $this->workerType) {
            $res['WorkerType'] = $this->workerType;
        }

        if (null !== $this->workers) {
            $res['Workers'] = $this->workers;
        }

        if (null !== $this->XAttrs) {
            $res['XAttrs'] = $this->XAttrs;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['AutoScale'])) {
            $model->autoScale = $map['AutoScale'];
        }

        if (isset($map['CiteList'])) {
            if (!empty($map['CiteList'])) {
                $model->citeList = [];
                $n1 = 0;
                foreach ($map['CiteList'] as $item1) {
                    $model->citeList[$n1] = citeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CmsWorkspaceId'])) {
            $model->cmsWorkspaceId = $map['CmsWorkspaceId'];
        }

        if (isset($map['CurrentJobs'])) {
            $model->currentJobs = $map['CurrentJobs'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }

        if (isset($map['MaxJobs'])) {
            $model->maxJobs = $map['MaxJobs'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ResolvedWorkers'])) {
            $model->resolvedWorkers = $map['ResolvedWorkers'];
        }

        if (isset($map['WorkerId'])) {
            $model->workerId = $map['WorkerId'];
        }

        if (isset($map['WorkerType'])) {
            $model->workerType = $map['WorkerType'];
        }

        if (isset($map['Workers'])) {
            $model->workers = $map['Workers'];
        }

        if (isset($map['XAttrs'])) {
            $model->XAttrs = $map['XAttrs'];
        }

        return $model;
    }
}

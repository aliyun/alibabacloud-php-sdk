<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class E2BSandbox extends Model
{
    /**
     * @var string
     */
    public $accessEndpoint;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var bool
     */
    public $allowInternetAccess;

    /**
     * @var string
     */
    public $clientID;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endAt;

    /**
     * @var string
     */
    public $envdAccessToken;

    /**
     * @var string
     */
    public $envdVersion;

    /**
     * @var string
     */
    public $fcFunctionName;

    /**
     * @var string
     */
    public $fcInstanceID;

    /**
     * @var string
     */
    public $fcSessionID;

    /**
     * @var E2BLifecycle
     */
    public $lifecycle;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var E2BNetwork
     */
    public $network;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $userID;

    /**
     * @var E2BVolumeMount[]
     */
    public $volumeMounts;
    protected $_name = [
        'accessEndpoint' => 'accessEndpoint',
        'alias' => 'alias',
        'allowInternetAccess' => 'allowInternetAccess',
        'clientID' => 'clientID',
        'cpuCount' => 'cpuCount',
        'diskSizeMB' => 'diskSizeMB',
        'domain' => 'domain',
        'endAt' => 'endAt',
        'envdAccessToken' => 'envdAccessToken',
        'envdVersion' => 'envdVersion',
        'fcFunctionName' => 'fcFunctionName',
        'fcInstanceID' => 'fcInstanceID',
        'fcSessionID' => 'fcSessionID',
        'lifecycle' => 'lifecycle',
        'memoryMB' => 'memoryMB',
        'metadata' => 'metadata',
        'network' => 'network',
        'resourceGroupID' => 'resourceGroupID',
        'sandboxID' => 'sandboxID',
        'startedAt' => 'startedAt',
        'state' => 'state',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'templateID' => 'templateID',
        'templateName' => 'templateName',
        'userID' => 'userID',
        'volumeMounts' => 'volumeMounts',
    ];

    public function validate()
    {
        if (null !== $this->lifecycle) {
            $this->lifecycle->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (\is_array($this->volumeMounts)) {
            Model::validateArray($this->volumeMounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessEndpoint) {
            $res['accessEndpoint'] = $this->accessEndpoint;
        }

        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->allowInternetAccess) {
            $res['allowInternetAccess'] = $this->allowInternetAccess;
        }

        if (null !== $this->clientID) {
            $res['clientID'] = $this->clientID;
        }

        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }

        if (null !== $this->diskSizeMB) {
            $res['diskSizeMB'] = $this->diskSizeMB;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->endAt) {
            $res['endAt'] = $this->endAt;
        }

        if (null !== $this->envdAccessToken) {
            $res['envdAccessToken'] = $this->envdAccessToken;
        }

        if (null !== $this->envdVersion) {
            $res['envdVersion'] = $this->envdVersion;
        }

        if (null !== $this->fcFunctionName) {
            $res['fcFunctionName'] = $this->fcFunctionName;
        }

        if (null !== $this->fcInstanceID) {
            $res['fcInstanceID'] = $this->fcInstanceID;
        }

        if (null !== $this->fcSessionID) {
            $res['fcSessionID'] = $this->fcSessionID;
        }

        if (null !== $this->lifecycle) {
            $res['lifecycle'] = null !== $this->lifecycle ? $this->lifecycle->toArray($noStream) : $this->lifecycle;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        if (null !== $this->volumeMounts) {
            if (\is_array($this->volumeMounts)) {
                $res['volumeMounts'] = [];
                $n1 = 0;
                foreach ($this->volumeMounts as $item1) {
                    $res['volumeMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['accessEndpoint'])) {
            $model->accessEndpoint = $map['accessEndpoint'];
        }

        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['allowInternetAccess'])) {
            $model->allowInternetAccess = $map['allowInternetAccess'];
        }

        if (isset($map['clientID'])) {
            $model->clientID = $map['clientID'];
        }

        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }

        if (isset($map['diskSizeMB'])) {
            $model->diskSizeMB = $map['diskSizeMB'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['endAt'])) {
            $model->endAt = $map['endAt'];
        }

        if (isset($map['envdAccessToken'])) {
            $model->envdAccessToken = $map['envdAccessToken'];
        }

        if (isset($map['envdVersion'])) {
            $model->envdVersion = $map['envdVersion'];
        }

        if (isset($map['fcFunctionName'])) {
            $model->fcFunctionName = $map['fcFunctionName'];
        }

        if (isset($map['fcInstanceID'])) {
            $model->fcInstanceID = $map['fcInstanceID'];
        }

        if (isset($map['fcSessionID'])) {
            $model->fcSessionID = $map['fcSessionID'];
        }

        if (isset($map['lifecycle'])) {
            $model->lifecycle = E2BLifecycle::fromMap($map['lifecycle']);
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['network'])) {
            $model->network = E2BNetwork::fromMap($map['network']);
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        if (isset($map['volumeMounts'])) {
            if (!empty($map['volumeMounts'])) {
                $model->volumeMounts = [];
                $n1 = 0;
                foreach ($map['volumeMounts'] as $item1) {
                    $model->volumeMounts[$n1] = E2BVolumeMount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

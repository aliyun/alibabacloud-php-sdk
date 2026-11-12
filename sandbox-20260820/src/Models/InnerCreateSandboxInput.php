<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerCreateSandboxInput\resourceTags;

class InnerCreateSandboxInput extends Model
{
    /**
     * @var bool
     */
    public $allowInternetAccess;

    /**
     * @var bool
     */
    public $autoPause;

    /**
     * @var bool
     */
    public $autoResume;

    /**
     * @var string[]
     */
    public $envVars;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var E2BNetwork
     */
    public $network;

    /**
     * @var resourceTags[]
     */
    public $resourceTags;

    /**
     * @var InnerSandboxRuntimeConfig
     */
    public $runtime;

    /**
     * @var bool
     */
    public $secure;

    /**
     * @var string
     */
    public $snapshotID;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var InnerCreateSandboxVolumeMounts
     */
    public $volumeMounts;
    protected $_name = [
        'allowInternetAccess' => 'allowInternetAccess',
        'autoPause' => 'autoPause',
        'autoResume' => 'autoResume',
        'envVars' => 'envVars',
        'metadata' => 'metadata',
        'network' => 'network',
        'resourceTags' => 'resourceTags',
        'runtime' => 'runtime',
        'secure' => 'secure',
        'snapshotID' => 'snapshotID',
        'snapshotName' => 'snapshotName',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
        'timeout' => 'timeout',
        'volumeMounts' => 'volumeMounts',
    ];

    public function validate()
    {
        if (\is_array($this->envVars)) {
            Model::validateArray($this->envVars);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (null !== $this->volumeMounts) {
            $this->volumeMounts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowInternetAccess) {
            $res['allowInternetAccess'] = $this->allowInternetAccess;
        }

        if (null !== $this->autoPause) {
            $res['autoPause'] = $this->autoPause;
        }

        if (null !== $this->autoResume) {
            $res['autoResume'] = $this->autoResume;
        }

        if (null !== $this->envVars) {
            if (\is_array($this->envVars)) {
                $res['envVars'] = [];
                foreach ($this->envVars as $key1 => $value1) {
                    $res['envVars'][$key1] = $value1;
                }
            }
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

        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['resourceTags'] = [];
                $n1 = 0;
                foreach ($this->resourceTags as $item1) {
                    $res['resourceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->secure) {
            $res['secure'] = $this->secure;
        }

        if (null !== $this->snapshotID) {
            $res['snapshotID'] = $this->snapshotID;
        }

        if (null !== $this->snapshotName) {
            $res['snapshotName'] = $this->snapshotName;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->volumeMounts) {
            $res['volumeMounts'] = null !== $this->volumeMounts ? $this->volumeMounts->toArray($noStream) : $this->volumeMounts;
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
        if (isset($map['allowInternetAccess'])) {
            $model->allowInternetAccess = $map['allowInternetAccess'];
        }

        if (isset($map['autoPause'])) {
            $model->autoPause = $map['autoPause'];
        }

        if (isset($map['autoResume'])) {
            $model->autoResume = $map['autoResume'];
        }

        if (isset($map['envVars'])) {
            if (!empty($map['envVars'])) {
                $model->envVars = [];
                foreach ($map['envVars'] as $key1 => $value1) {
                    $model->envVars[$key1] = $value1;
                }
            }
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

        if (isset($map['resourceTags'])) {
            if (!empty($map['resourceTags'])) {
                $model->resourceTags = [];
                $n1 = 0;
                foreach ($map['resourceTags'] as $item1) {
                    $model->resourceTags[$n1] = resourceTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['runtime'])) {
            $model->runtime = InnerSandboxRuntimeConfig::fromMap($map['runtime']);
        }

        if (isset($map['secure'])) {
            $model->secure = $map['secure'];
        }

        if (isset($map['snapshotID'])) {
            $model->snapshotID = $map['snapshotID'];
        }

        if (isset($map['snapshotName'])) {
            $model->snapshotName = $map['snapshotName'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['volumeMounts'])) {
            $model->volumeMounts = InnerCreateSandboxVolumeMounts::fromMap($map['volumeMounts']);
        }

        return $model;
    }
}

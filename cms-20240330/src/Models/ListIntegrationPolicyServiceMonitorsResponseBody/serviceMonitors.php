<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponseBody\serviceMonitors\endpoints;

class serviceMonitors extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $addonReleaseName;

    /**
     * @var string
     */
    public $addonVersion;

    /**
     * @var string
     */
    public $configYaml;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var bool
     */
    public $encryptYaml;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var int
     */
    public $matchedServiceCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'addonName' => 'addonName',
        'addonReleaseName' => 'addonReleaseName',
        'addonVersion' => 'addonVersion',
        'configYaml' => 'configYaml',
        'enableStatus' => 'enableStatus',
        'encryptYaml' => 'encryptYaml',
        'endpoints' => 'endpoints',
        'matchedServiceCount' => 'matchedServiceCount',
        'name' => 'name',
        'namespace' => 'namespace',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->addonReleaseName) {
            $res['addonReleaseName'] = $this->addonReleaseName;
        }

        if (null !== $this->addonVersion) {
            $res['addonVersion'] = $this->addonVersion;
        }

        if (null !== $this->configYaml) {
            $res['configYaml'] = $this->configYaml;
        }

        if (null !== $this->enableStatus) {
            $res['enableStatus'] = $this->enableStatus;
        }

        if (null !== $this->encryptYaml) {
            $res['encryptYaml'] = $this->encryptYaml;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchedServiceCount) {
            $res['matchedServiceCount'] = $this->matchedServiceCount;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
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
        if (isset($map['addonName'])) {
            $model->addonName = $map['addonName'];
        }

        if (isset($map['addonReleaseName'])) {
            $model->addonReleaseName = $map['addonReleaseName'];
        }

        if (isset($map['addonVersion'])) {
            $model->addonVersion = $map['addonVersion'];
        }

        if (isset($map['configYaml'])) {
            $model->configYaml = $map['configYaml'];
        }

        if (isset($map['enableStatus'])) {
            $model->enableStatus = $map['enableStatus'];
        }

        if (isset($map['encryptYaml'])) {
            $model->encryptYaml = $map['encryptYaml'];
        }

        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['matchedServiceCount'])) {
            $model->matchedServiceCount = $map['matchedServiceCount'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        return $model;
    }
}

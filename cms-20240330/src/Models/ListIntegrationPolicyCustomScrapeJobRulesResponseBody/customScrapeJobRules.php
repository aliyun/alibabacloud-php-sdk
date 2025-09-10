<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyCustomScrapeJobRulesResponseBody\customScrapeJobRules\scrapeConfigs;

class customScrapeJobRules extends Model
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
     * @var int
     */
    public $matchedPodCount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var scrapeConfigs[]
     */
    public $scrapeConfigs;
    protected $_name = [
        'addonName' => 'addonName',
        'addonReleaseName' => 'addonReleaseName',
        'addonVersion' => 'addonVersion',
        'configYaml' => 'configYaml',
        'enableStatus' => 'enableStatus',
        'encryptYaml' => 'encryptYaml',
        'matchedPodCount' => 'matchedPodCount',
        'message' => 'message',
        'name' => 'name',
        'namespace' => 'namespace',
        'scrapeConfigs' => 'scrapeConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->scrapeConfigs)) {
            Model::validateArray($this->scrapeConfigs);
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

        if (null !== $this->matchedPodCount) {
            $res['matchedPodCount'] = $this->matchedPodCount;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->scrapeConfigs) {
            if (\is_array($this->scrapeConfigs)) {
                $res['scrapeConfigs'] = [];
                $n1 = 0;
                foreach ($this->scrapeConfigs as $item1) {
                    $res['scrapeConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['matchedPodCount'])) {
            $model->matchedPodCount = $map['matchedPodCount'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['scrapeConfigs'])) {
            if (!empty($map['scrapeConfigs'])) {
                $model->scrapeConfigs = [];
                $n1 = 0;
                foreach ($map['scrapeConfigs'] as $item1) {
                    $model->scrapeConfigs[$n1] = scrapeConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

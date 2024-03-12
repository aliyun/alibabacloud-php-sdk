<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\Tea\Model;

class feature extends Model
{
    /**
     * @description The alias of the feature.
     *
     * @example Prometheus agent.
     *
     * @var string
     */
    public $alias;

    /**
     * @description The configuration of the feature.
     *
     * @var string[]
     */
    public $config;

    /**
     * @description The description of the feature.
     *
     * @example Collect Metric data using the Prometheus collection specification.
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The URL of the icon.
     *
     * @example http://xxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description The language.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The latest version number.
     *
     * @example 1.1.17
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @var bool
     */
    public $managed;

    /**
     * @description The name of the feature.
     *
     * @example metric-agent
     *
     * @var string
     */
    public $name;

    /**
     * @description The status.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The version number.
     *
     * @example 1.1.17
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'alias'         => 'Alias',
        'config'        => 'Config',
        'description'   => 'Description',
        'environmentId' => 'EnvironmentId',
        'icon'          => 'Icon',
        'language'      => 'Language',
        'latestVersion' => 'LatestVersion',
        'managed'       => 'Managed',
        'name'          => 'Name',
        'status'        => 'Status',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->managed) {
            $res['Managed'] = $this->managed;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['Managed'])) {
            $model->managed = $map['Managed'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}

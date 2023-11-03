<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\Tea\Model;

class feature extends Model
{
    /**
     * @description Alias of Feature.
     *
     * @example Prometheus agent.
     *
     * @var string
     */
    public $alias;

    /**
     * @description Config of Feature.
     *
     * @var string[]
     */
    public $config;

    /**
     * @description Description of Feature.
     *
     * @example Collect Metric data using the Prometheus collection specification.
     *
     * @var string
     */
    public $description;

    /**
     * @description Environment ID.
     *
     * @example env-xxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Icon address.
     *
     * @example http://xxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description Lanuage.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description This is the latest version of Feature.
     *
     * @example 1.1.17
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @description Name of Feature.
     *
     * @example metric-agent
     *
     * @var string
     */
    public $name;

    /**
     * @description Status of Feature.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description Version of Feature.
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\Dara\Model;

class feature extends Model
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var string[]
     */
    public $config;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $latestVersion;
    /**
     * @var bool
     */
    public $managed;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['Config'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                foreach ($map['Config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
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

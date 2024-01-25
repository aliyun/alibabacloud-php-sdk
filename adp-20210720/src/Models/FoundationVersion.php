<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\driver;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\packageTools;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\tools;
use AlibabaCloud\Tea\Model;

class FoundationVersion extends Model
{
    /**
     * @var string
     */
    public $clusterConfigSchema;

    /**
     * @var clusterEngines[]
     */
    public $clusterEngines;

    /**
     * @var string
     */
    public $defaultClusterConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $documents;

    /**
     * @var driver
     */
    public $driver;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $labels;

    /**
     * @example ADP 底座
     *
     * @var string
     */
    public $name;

    /**
     * @var packageTools[]
     */
    public $packageTools;

    /**
     * @var Platform[]
     */
    public $platforms;

    /**
     * @var string
     */
    public $specName;

    /**
     * @example Testing
     *
     * @var string
     */
    public $status;

    /**
     * @var tools
     */
    public $tools;

    /**
     * @example trident
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string[]
     */
    public $userWhiteList;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterConfigSchema'  => 'clusterConfigSchema',
        'clusterEngines'       => 'clusterEngines',
        'defaultClusterConfig' => 'defaultClusterConfig',
        'description'          => 'description',
        'documents'            => 'documents',
        'driver'               => 'driver',
        'features'             => 'features',
        'isDefault'            => 'isDefault',
        'labels'               => 'labels',
        'name'                 => 'name',
        'packageTools'         => 'packageTools',
        'platforms'            => 'platforms',
        'specName'             => 'specName',
        'status'               => 'status',
        'tools'                => 'tools',
        'type'                 => 'type',
        'uid'                  => 'uid',
        'userWhiteList'        => 'userWhiteList',
        'version'              => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterConfigSchema) {
            $res['clusterConfigSchema'] = $this->clusterConfigSchema;
        }
        if (null !== $this->clusterEngines) {
            $res['clusterEngines'] = [];
            if (null !== $this->clusterEngines && \is_array($this->clusterEngines)) {
                $n = 0;
                foreach ($this->clusterEngines as $item) {
                    $res['clusterEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultClusterConfig) {
            $res['defaultClusterConfig'] = $this->defaultClusterConfig;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->documents) {
            $res['documents'] = $this->documents;
        }
        if (null !== $this->driver) {
            $res['driver'] = null !== $this->driver ? $this->driver->toMap() : null;
        }
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->packageTools) {
            $res['packageTools'] = [];
            if (null !== $this->packageTools && \is_array($this->packageTools)) {
                $n = 0;
                foreach ($this->packageTools as $item) {
                    $res['packageTools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specName) {
            $res['specName'] = $this->specName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tools) {
            $res['tools'] = null !== $this->tools ? $this->tools->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->userWhiteList) {
            $res['userWhiteList'] = $this->userWhiteList;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FoundationVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterConfigSchema'])) {
            $model->clusterConfigSchema = $map['clusterConfigSchema'];
        }
        if (isset($map['clusterEngines'])) {
            if (!empty($map['clusterEngines'])) {
                $model->clusterEngines = [];
                $n                     = 0;
                foreach ($map['clusterEngines'] as $item) {
                    $model->clusterEngines[$n++] = null !== $item ? clusterEngines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['defaultClusterConfig'])) {
            $model->defaultClusterConfig = $map['defaultClusterConfig'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['documents'])) {
            $model->documents = $map['documents'];
        }
        if (isset($map['driver'])) {
            $model->driver = driver::fromMap($map['driver']);
        }
        if (isset($map['features'])) {
            if (!empty($map['features'])) {
                $model->features = $map['features'];
            }
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['packageTools'])) {
            if (!empty($map['packageTools'])) {
                $model->packageTools = [];
                $n                   = 0;
                foreach ($map['packageTools'] as $item) {
                    $model->packageTools[$n++] = null !== $item ? packageTools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['platforms'])) {
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['specName'])) {
            $model->specName = $map['specName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tools'])) {
            $model->tools = tools::fromMap($map['tools']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['userWhiteList'])) {
            if (!empty($map['userWhiteList'])) {
                $model->userWhiteList = $map['userWhiteList'];
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

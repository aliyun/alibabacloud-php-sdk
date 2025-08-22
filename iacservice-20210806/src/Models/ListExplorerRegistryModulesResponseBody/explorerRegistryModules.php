<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesResponseBody;

use AlibabaCloud\Dara\Model;

class explorerRegistryModules extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $downloads;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'description',
        'downloads' => 'downloads',
        'latestVersion' => 'latestVersion',
        'moduleName' => 'moduleName',
        'namespaceName' => 'namespaceName',
        'source' => 'source',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->downloads) {
            $res['downloads'] = $this->downloads;
        }

        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['downloads'])) {
            $model->downloads = $map['downloads'];
        }

        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class explorerRegistryModuleVersions extends Model
{
    /**
     * @var mixed[]
     */
    public $moduleDetail;

    /**
     * @var mixed[]
     */
    public $moduleFile;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'moduleDetail' => 'moduleDetail',
        'moduleFile' => 'moduleFile',
        'moduleName' => 'moduleName',
        'namespaceName' => 'namespaceName',
        'properties' => 'properties',
        'source' => 'source',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetail)) {
            Model::validateArray($this->moduleDetail);
        }
        if (\is_array($this->moduleFile)) {
            Model::validateArray($this->moduleFile);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleDetail) {
            if (\is_array($this->moduleDetail)) {
                $res['moduleDetail'] = [];
                foreach ($this->moduleDetail as $key1 => $value1) {
                    $res['moduleDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->moduleFile) {
            if (\is_array($this->moduleFile)) {
                $res['moduleFile'] = [];
                foreach ($this->moduleFile as $key1 => $value1) {
                    $res['moduleFile'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['moduleDetail'])) {
            if (!empty($map['moduleDetail'])) {
                $model->moduleDetail = [];
                foreach ($map['moduleDetail'] as $key1 => $value1) {
                    $model->moduleDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['moduleFile'])) {
            if (!empty($map['moduleFile'])) {
                $model->moduleFile = [];
                foreach ($map['moduleFile'] as $key1 => $value1) {
                    $model->moduleFile[$key1] = $value1;
                }
            }
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

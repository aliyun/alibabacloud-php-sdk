<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class PolicyClassInfo extends Model
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var string[]
     */
    public $attachableResourceTypes;
    /**
     * @var string
     */
    public $classId;
    /**
     * @var string
     */
    public $configExample;
    /**
     * @var bool
     */
    public $deprecated;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $direction;
    /**
     * @var bool
     */
    public $enableLog;
    /**
     * @var string
     */
    public $executePriority;
    /**
     * @var string
     */
    public $executeStage;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'alias'                   => 'alias',
        'attachableResourceTypes' => 'attachableResourceTypes',
        'classId'                 => 'classId',
        'configExample'           => 'configExample',
        'deprecated'              => 'deprecated',
        'description'             => 'description',
        'direction'               => 'direction',
        'enableLog'               => 'enableLog',
        'executePriority'         => 'executePriority',
        'executeStage'            => 'executeStage',
        'name'                    => 'name',
        'type'                    => 'type',
        'version'                 => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->attachableResourceTypes)) {
            Model::validateArray($this->attachableResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->attachableResourceTypes) {
            if (\is_array($this->attachableResourceTypes)) {
                $res['attachableResourceTypes'] = [];
                $n1                             = 0;
                foreach ($this->attachableResourceTypes as $item1) {
                    $res['attachableResourceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->classId) {
            $res['classId'] = $this->classId;
        }

        if (null !== $this->configExample) {
            $res['configExample'] = $this->configExample;
        }

        if (null !== $this->deprecated) {
            $res['deprecated'] = $this->deprecated;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->enableLog) {
            $res['enableLog'] = $this->enableLog;
        }

        if (null !== $this->executePriority) {
            $res['executePriority'] = $this->executePriority;
        }

        if (null !== $this->executeStage) {
            $res['executeStage'] = $this->executeStage;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['attachableResourceTypes'])) {
            if (!empty($map['attachableResourceTypes'])) {
                $model->attachableResourceTypes = [];
                $n1                             = 0;
                foreach ($map['attachableResourceTypes'] as $item1) {
                    $model->attachableResourceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['classId'])) {
            $model->classId = $map['classId'];
        }

        if (isset($map['configExample'])) {
            $model->configExample = $map['configExample'];
        }

        if (isset($map['deprecated'])) {
            $model->deprecated = $map['deprecated'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['enableLog'])) {
            $model->enableLog = $map['enableLog'];
        }

        if (isset($map['executePriority'])) {
            $model->executePriority = $map['executePriority'];
        }

        if (isset($map['executeStage'])) {
            $model->executeStage = $map['executeStage'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands\parameterDefinitions;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands\tags;

class commands extends Model
{
    /**
     * @var string
     */
    public $commandContent;
    /**
     * @var string
     */
    public $commandId;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enableParameter;
    /**
     * @var string
     */
    public $name;
    /**
     * @var parameterDefinitions[]
     */
    public $parameterDefinitions;
    /**
     * @var string[]
     */
    public $parameterNames;
    /**
     * @var string
     */
    public $provider;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var int
     */
    public $timeout;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'       => 'CommandContent',
        'commandId'            => 'CommandId',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'enableParameter'      => 'EnableParameter',
        'name'                 => 'Name',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterNames'       => 'ParameterNames',
        'provider'             => 'Provider',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
        'timeout'              => 'Timeout',
        'type'                 => 'Type',
        'workingDir'           => 'WorkingDir',
    ];

    public function validate()
    {
        if (\is_array($this->parameterDefinitions)) {
            Model::validateArray($this->parameterDefinitions);
        }
        if (\is_array($this->parameterNames)) {
            Model::validateArray($this->parameterNames);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameterDefinitions) {
            if (\is_array($this->parameterDefinitions)) {
                $res['ParameterDefinitions'] = [];
                $n1                          = 0;
                foreach ($this->parameterDefinitions as $item1) {
                    $res['ParameterDefinitions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->parameterNames) {
            if (\is_array($this->parameterNames)) {
                $res['ParameterNames'] = [];
                $n1                    = 0;
                foreach ($this->parameterNames as $item1) {
                    $res['ParameterNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
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
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParameterDefinitions'])) {
            if (!empty($map['ParameterDefinitions'])) {
                $model->parameterDefinitions = [];
                $n1                          = 0;
                foreach ($map['ParameterDefinitions'] as $item1) {
                    $model->parameterDefinitions[$n1++] = parameterDefinitions::fromMap($item1);
                }
            }
        }

        if (isset($map['ParameterNames'])) {
            if (!empty($map['ParameterNames'])) {
                $model->parameterNames = [];
                $n1                    = 0;
                foreach ($map['ParameterNames'] as $item1) {
                    $model->parameterNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}

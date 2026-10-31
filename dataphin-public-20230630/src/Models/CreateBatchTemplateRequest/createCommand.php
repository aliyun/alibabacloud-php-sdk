<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTemplateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTemplateRequest\createCommand\dataSourceConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTemplateRequest\createCommand\params;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var dataSourceConfig
     */
    public $dataSourceConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $devResourceGroupId;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $operatorType;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @var int[]
     */
    public $pythonModuleIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $shareRuntimeResource;
    protected $_name = [
        'content' => 'Content',
        'dataSourceConfig' => 'DataSourceConfig',
        'description' => 'Description',
        'devResourceGroupId' => 'DevResourceGroupId',
        'directory' => 'Directory',
        'engine' => 'Engine',
        'name' => 'Name',
        'operatorType' => 'OperatorType',
        'params' => 'Params',
        'pythonModuleIds' => 'PythonModuleIds',
        'resourceGroupId' => 'ResourceGroupId',
        'shareRuntimeResource' => 'ShareRuntimeResource',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceConfig) {
            $this->dataSourceConfig->validate();
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->pythonModuleIds)) {
            Model::validateArray($this->pythonModuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->dataSourceConfig) {
            $res['DataSourceConfig'] = null !== $this->dataSourceConfig ? $this->dataSourceConfig->toArray($noStream) : $this->dataSourceConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->devResourceGroupId) {
            $res['DevResourceGroupId'] = $this->devResourceGroupId;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['Params'] = [];
                $n1 = 0;
                foreach ($this->params as $item1) {
                    $res['Params'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pythonModuleIds) {
            if (\is_array($this->pythonModuleIds)) {
                $res['PythonModuleIds'] = [];
                $n1 = 0;
                foreach ($this->pythonModuleIds as $item1) {
                    $res['PythonModuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->shareRuntimeResource) {
            $res['ShareRuntimeResource'] = $this->shareRuntimeResource;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DataSourceConfig'])) {
            $model->dataSourceConfig = dataSourceConfig::fromMap($map['DataSourceConfig']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DevResourceGroupId'])) {
            $model->devResourceGroupId = $map['DevResourceGroupId'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n1 = 0;
                foreach ($map['Params'] as $item1) {
                    $model->params[$n1] = params::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PythonModuleIds'])) {
            if (!empty($map['PythonModuleIds'])) {
                $model->pythonModuleIds = [];
                $n1 = 0;
                foreach ($map['PythonModuleIds'] as $item1) {
                    $model->pythonModuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShareRuntimeResource'])) {
            $model->shareRuntimeResource = $map['ShareRuntimeResource'];
        }

        return $model;
    }
}

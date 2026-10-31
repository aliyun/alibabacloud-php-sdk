<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTemplatesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTemplatesResponseBody\pageResult\templateList\dataSourceConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTemplatesResponseBody\pageResult\templateList\params;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTemplatesResponseBody\pageResult\templateList\pythonModuleList;

class templateList extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $currentVersion;

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
    public $devResourceGroupName;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $operatorType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var pythonModuleList[]
     */
    public $pythonModuleList;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var bool
     */
    public $shareRuntimeResource;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'comment' => 'Comment',
        'content' => 'Content',
        'currentVersion' => 'CurrentVersion',
        'dataSourceConfig' => 'DataSourceConfig',
        'description' => 'Description',
        'devResourceGroupId' => 'DevResourceGroupId',
        'devResourceGroupName' => 'DevResourceGroupName',
        'engine' => 'Engine',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'modifier' => 'Modifier',
        'modifierId' => 'ModifierId',
        'name' => 'Name',
        'operatorType' => 'OperatorType',
        'owner' => 'Owner',
        'ownerId' => 'OwnerId',
        'params' => 'Params',
        'projectId' => 'ProjectId',
        'pythonModuleList' => 'PythonModuleList',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'shareRuntimeResource' => 'ShareRuntimeResource',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceConfig) {
            $this->dataSourceConfig->validate();
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
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

        if (null !== $this->devResourceGroupName) {
            $res['DevResourceGroupName'] = $this->devResourceGroupName;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->pythonModuleList) {
            if (\is_array($this->pythonModuleList)) {
                $res['PythonModuleList'] = [];
                $n1 = 0;
                foreach ($this->pythonModuleList as $item1) {
                    $res['PythonModuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->shareRuntimeResource) {
            $res['ShareRuntimeResource'] = $this->shareRuntimeResource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
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

        if (isset($map['DevResourceGroupName'])) {
            $model->devResourceGroupName = $map['DevResourceGroupName'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['PythonModuleList'])) {
            if (!empty($map['PythonModuleList'])) {
                $model->pythonModuleList = [];
                $n1 = 0;
                foreach ($map['PythonModuleList'] as $item1) {
                    $model->pythonModuleList[$n1] = pythonModuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['ShareRuntimeResource'])) {
            $model->shareRuntimeResource = $map['ShareRuntimeResource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

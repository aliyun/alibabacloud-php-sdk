<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items\modelTags;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items\ruleList;

class items extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $fileCategoryCode;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isRevision;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var int
     */
    public $maskStatus;

    /**
     * @var int
     */
    public $memberAccount;

    /**
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectFileCategory;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sx;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $taskNumber;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'categories' => 'Categories',
        'comment' => 'Comment',
        'dataType' => 'DataType',
        'dbName' => 'DbName',
        'fileCategoryCode' => 'FileCategoryCode',
        'id' => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'instanceId' => 'InstanceId',
        'isRevision' => 'IsRevision',
        'lastModifiedTime' => 'LastModifiedTime',
        'lastScanTime' => 'LastScanTime',
        'logStore' => 'LogStore',
        'maskStatus' => 'MaskStatus',
        'memberAccount' => 'MemberAccount',
        'modelTags' => 'ModelTags',
        'name' => 'Name',
        'objectFileCategory' => 'ObjectFileCategory',
        'objectType' => 'ObjectType',
        'path' => 'Path',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'project' => 'Project',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'riskLevelId' => 'RiskLevelId',
        'ruleCount' => 'RuleCount',
        'ruleList' => 'RuleList',
        'sensitiveCount' => 'SensitiveCount',
        'size' => 'Size',
        'sx' => 'Sx',
        'tableName' => 'TableName',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskNumber' => 'TaskNumber',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->modelTags)) {
            Model::validateArray($this->modelTags);
        }
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->fileCategoryCode) {
            $res['FileCategoryCode'] = $this->fileCategoryCode;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isRevision) {
            $res['IsRevision'] = $this->isRevision;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        if (null !== $this->maskStatus) {
            $res['MaskStatus'] = $this->maskStatus;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->modelTags) {
            if (\is_array($this->modelTags)) {
                $res['ModelTags'] = [];
                $n1 = 0;
                foreach ($this->modelTags as $item1) {
                    $res['ModelTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectFileCategory) {
            $res['ObjectFileCategory'] = $this->objectFileCategory;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1 = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->sx) {
            $res['Sx'] = $this->sx;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskNumber) {
            $res['TaskNumber'] = $this->taskNumber;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['FileCategoryCode'])) {
            $model->fileCategoryCode = $map['FileCategoryCode'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsRevision'])) {
            $model->isRevision = $map['IsRevision'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        if (isset($map['MaskStatus'])) {
            $model->maskStatus = $map['MaskStatus'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n1 = 0;
                foreach ($map['ModelTags'] as $item1) {
                    $model->modelTags[$n1] = modelTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectFileCategory'])) {
            $model->objectFileCategory = $map['ObjectFileCategory'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1 = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1] = ruleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Sx'])) {
            $model->sx = $map['Sx'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskNumber'])) {
            $model->taskNumber = $map['TaskNumber'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}

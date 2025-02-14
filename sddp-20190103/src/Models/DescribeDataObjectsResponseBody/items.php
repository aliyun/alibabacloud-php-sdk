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
    public $lastModifiedTime;
    /**
     * @var int
     */
    public $lastScanTime;
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
    public $regionId;
    /**
     * @var string
     */
    public $regionName;
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
    public $templateId;
    protected $_name = [
        'categories'          => 'Categories',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'instanceId'          => 'InstanceId',
        'lastModifiedTime'    => 'LastModifiedTime',
        'lastScanTime'        => 'LastScanTime',
        'memberAccount'       => 'MemberAccount',
        'modelTags'           => 'ModelTags',
        'name'                => 'Name',
        'objectFileCategory'  => 'ObjectFileCategory',
        'objectType'          => 'ObjectType',
        'path'                => 'Path',
        'productCode'         => 'ProductCode',
        'productId'           => 'ProductId',
        'regionId'            => 'RegionId',
        'regionName'          => 'RegionName',
        'ruleList'            => 'RuleList',
        'sensitiveCount'      => 'SensitiveCount',
        'templateId'          => 'TemplateId',
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
                $n1                = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->modelTags) {
            if (\is_array($this->modelTags)) {
                $res['ModelTags'] = [];
                $n1               = 0;
                foreach ($this->modelTags as $item1) {
                    $res['ModelTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1              = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
                $n1                = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
            }
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

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n1               = 0;
                foreach ($map['ModelTags'] as $item1) {
                    $model->modelTags[$n1++] = modelTags::fromMap($item1);
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1              = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1++] = ruleList::fromMap($item1);
                }
            }
        }

        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}

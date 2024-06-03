<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items\modelTags;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items\ruleList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @example 20000
     *
     * @var string
     */
    public $id;

    /**
     * @example instance description
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @example rm-1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @example 1687676649830
     *
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
     * @example t_sddp_selfmysql_pers0
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectFileCategory;

    /**
     * @example text type
     *
     * @var string
     */
    public $objectType;

    /**
     * @example rm-1234.db_test
     *
     * @var string
     */
    public $path;

    /**
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 5
     *
     * @var int
     */
    public $productId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionName;

    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @example 1
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @example 1
     *
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
        'regionName'          => 'RegionName',
        'ruleList'            => 'RuleList',
        'sensitiveCount'      => 'SensitiveCount',
        'templateId'          => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
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
            $res['ModelTags'] = [];
            if (null !== $this->modelTags && \is_array($this->modelTags)) {
                $n = 0;
                foreach ($this->modelTags as $item) {
                    $res['ModelTags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
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
                $n                = 0;
                foreach ($map['ModelTags'] as $item) {
                    $model->modelTags[$n++] = null !== $item ? modelTags::fromMap($item) : $item;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
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

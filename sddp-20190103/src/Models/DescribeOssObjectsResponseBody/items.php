<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody\items\ruleList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var string
     */
    public $id;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'categoryName'   => 'CategoryName',
        'riskLevelId'    => 'RiskLevelId',
        'regionId'       => 'RegionId',
        'fileId'         => 'FileId',
        'size'           => 'Size',
        'bucketName'     => 'BucketName',
        'riskLevelName'  => 'RiskLevelName',
        'category'       => 'Category',
        'name'           => 'Name',
        'ruleCount'      => 'RuleCount',
        'sensitiveCount' => 'SensitiveCount',
        'id'             => 'Id',
        'ruleList'       => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}

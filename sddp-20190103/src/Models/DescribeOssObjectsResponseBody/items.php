<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody\items\ruleList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * @example oss-duplicate-***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The type ID of the OSS object. Valid values include **900001**, **800015**, or **800005**, which indicates the MP4 file, PDF file, or OSS configuration file, respectively.
     *
     * @example 900001
     *
     * @var int
     */
    public $category;

    /**
     * @description The file type of the OSS object.
     *
     * @example MP4 file
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description The file ID of the OSS object.
     *
     * @example file-22***
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The ID of the OSS object.
     *
     * @example 17383
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the instance to which the OSS object belongs.
     *
     * @example 1232122
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the OSS object.
     *
     * @example obj_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the OSS object.
     *
     * @example cn-***
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The sensitivity level of the OSS object. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for the OSS object.
     *
     * @example Medium sensitivity level
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The number of rules that are hit.
     *
     * @example 100
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @description An array that consists of the rules.
     *
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @description The number of fields that are hit.
     *
     * @example 50
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @description The size of the file. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'bucketName'     => 'BucketName',
        'category'       => 'Category',
        'categoryName'   => 'CategoryName',
        'fileId'         => 'FileId',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'regionId'       => 'RegionId',
        'riskLevelId'    => 'RiskLevelId',
        'riskLevelName'  => 'RiskLevelName',
        'ruleCount'      => 'RuleCount',
        'ruleList'       => 'RuleList',
        'sensitiveCount' => 'SensitiveCount',
        'size'           => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

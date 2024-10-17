<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailV2ResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailV2ResponseBody\ossObjectDetail\ruleList;
use AlibabaCloud\Tea\Model;

class ossObjectDetail extends Model
{
    /**
     * @example lv-demo
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example Excel file
     *
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $fileCategoryName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modelTagIds;

    /**
     * @example obj_id
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectAcl;

    /**
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @example S1
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @var ruleList[]
     */
    public $ruleList;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'bucketName'       => 'BucketName',
        'categoryName'     => 'CategoryName',
        'fileCategoryName' => 'FileCategoryName',
        'id'               => 'Id',
        'modelTagIds'      => 'ModelTagIds',
        'name'             => 'Name',
        'objectAcl'        => 'ObjectAcl',
        'regionId'         => 'RegionId',
        'riskLevelId'      => 'RiskLevelId',
        'riskLevelName'    => 'RiskLevelName',
        'ruleList'         => 'RuleList',
        'size'             => 'Size',
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
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->fileCategoryName) {
            $res['FileCategoryName'] = $this->fileCategoryName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelTagIds) {
            $res['ModelTagIds'] = $this->modelTagIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectAcl) {
            $res['ObjectAcl'] = $this->objectAcl;
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
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossObjectDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['FileCategoryName'])) {
            $model->fileCategoryName = $map['FileCategoryName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelTagIds'])) {
            $model->modelTagIds = $map['ModelTagIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectAcl'])) {
            $model->objectAcl = $map['ObjectAcl'];
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
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

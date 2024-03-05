<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetYunQiTaskByRecordIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $evaluationStar;

    /**
     * @var string
     */
    public $important;

    /**
     * @var string
     */
    public $mainDingDepartmentId;

    /**
     * @var string
     */
    public $mainDingGroupId;

    /**
     * @var string
     */
    public $mainDingGroupName;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDingDepartmentId;

    /**
     * @var string
     */
    public $subDingGroupId;

    /**
     * @var string
     */
    public $subDingGroupName;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chatId'               => 'chatId',
        'createTime'           => 'createTime',
        'creatorName'          => 'creatorName',
        'endTime'              => 'endTime',
        'evaluationStar'       => 'evaluationStar',
        'important'            => 'important',
        'mainDingDepartmentId' => 'mainDingDepartmentId',
        'mainDingGroupId'      => 'mainDingGroupId',
        'mainDingGroupName'    => 'mainDingGroupName',
        'productName'          => 'productName',
        'recordId'             => 'recordId',
        'status'               => 'status',
        'subDingDepartmentId'  => 'subDingDepartmentId',
        'subDingGroupId'       => 'subDingGroupId',
        'subDingGroupName'     => 'subDingGroupName',
        'title'                => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->evaluationStar) {
            $res['evaluationStar'] = $this->evaluationStar;
        }
        if (null !== $this->important) {
            $res['important'] = $this->important;
        }
        if (null !== $this->mainDingDepartmentId) {
            $res['mainDingDepartmentId'] = $this->mainDingDepartmentId;
        }
        if (null !== $this->mainDingGroupId) {
            $res['mainDingGroupId'] = $this->mainDingGroupId;
        }
        if (null !== $this->mainDingGroupName) {
            $res['mainDingGroupName'] = $this->mainDingGroupName;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subDingDepartmentId) {
            $res['subDingDepartmentId'] = $this->subDingDepartmentId;
        }
        if (null !== $this->subDingGroupId) {
            $res['subDingGroupId'] = $this->subDingGroupId;
        }
        if (null !== $this->subDingGroupName) {
            $res['subDingGroupName'] = $this->subDingGroupName;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['evaluationStar'])) {
            $model->evaluationStar = $map['evaluationStar'];
        }
        if (isset($map['important'])) {
            $model->important = $map['important'];
        }
        if (isset($map['mainDingDepartmentId'])) {
            $model->mainDingDepartmentId = $map['mainDingDepartmentId'];
        }
        if (isset($map['mainDingGroupId'])) {
            $model->mainDingGroupId = $map['mainDingGroupId'];
        }
        if (isset($map['mainDingGroupName'])) {
            $model->mainDingGroupName = $map['mainDingGroupName'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subDingDepartmentId'])) {
            $model->subDingDepartmentId = $map['subDingDepartmentId'];
        }
        if (isset($map['subDingGroupId'])) {
            $model->subDingGroupId = $map['subDingGroupId'];
        }
        if (isset($map['subDingGroupName'])) {
            $model->subDingGroupName = $map['subDingGroupName'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}

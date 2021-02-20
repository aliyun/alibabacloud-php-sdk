<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllVulnerabilitiesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scanId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $module;

    /**
     * @var int
     */
    public $vulType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scanId'          => 'ScanId',
        'name'            => 'Name',
        'search'          => 'Search',
        'lang'            => 'Lang',
        'severity'        => 'Severity',
        'status'          => 'Status',
        'beginTime'       => 'BeginTime',
        'endTime'         => 'EndTime',
        'taskId'          => 'TaskId',
        'category'        => 'Category',
        'module'          => 'Module',
        'vulType'         => 'VulType',
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scanId) {
            $res['ScanId'] = $this->scanId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllVulnerabilitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScanId'])) {
            $model->scanId = $map['ScanId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

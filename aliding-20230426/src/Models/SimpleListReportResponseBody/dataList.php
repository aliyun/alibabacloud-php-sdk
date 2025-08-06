<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'creatorName' => 'CreatorName',
        'deptName' => 'DeptName',
        'remark' => 'Remark',
        'reportId' => 'ReportId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->deptName) {
            $res['DeptName'] = $this->deptName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['DeptName'])) {
            $model->deptName = $map['DeptName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}

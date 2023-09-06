<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 1567034772000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1701038
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example xinmu
     *
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @example ops
     *
     * @var string
     */
    public $remark;

    /**
     * @example d64994d09916c76276dd9bfa23637644
     *
     * @var string
     */
    public $reportId;

    /**
     * @example WG-Template
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'creatorId'    => 'CreatorId',
        'creatorName'  => 'CreatorName',
        'deptName'     => 'DeptName',
        'remark'       => 'Remark',
        'reportId'     => 'ReportId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataList
     */
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

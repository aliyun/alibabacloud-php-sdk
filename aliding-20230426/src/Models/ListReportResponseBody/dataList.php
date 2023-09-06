<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponseBody\dataList\contents;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @example 1678416166000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1127123
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example admin
     *
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @example 31.1264
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 108.938036
     *
     * @var string
     */
    public $longitude;

    /**
     * @example 1653543540000
     *
     * @var int
     */
    public $modifiedTime;

    /**
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
     * @var string
     */
    public $templateName;
    protected $_name = [
        'contents'     => 'Contents',
        'createTime'   => 'CreateTime',
        'creatorId'    => 'CreatorId',
        'creatorName'  => 'CreatorName',
        'deptName'     => 'DeptName',
        'images'       => 'Images',
        'latitude'     => 'Latitude',
        'longitude'    => 'Longitude',
        'modifiedTime' => 'ModifiedTime',
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
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
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
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = $map['Images'];
            }
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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

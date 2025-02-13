<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponseBody\dataList\contents;

class dataList extends Model
{
    /**
     * @var contents[]
     */
    public $contents;
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
     * @var string[]
     */
    public $images;
    /**
     * @var string
     */
    public $latitude;
    /**
     * @var string
     */
    public $longitude;
    /**
     * @var int
     */
    public $modifiedTime;
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
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1              = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1            = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1              = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1++] = contents::fromMap($item1);
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
                $model->images = [];
                $n1            = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = $item1;
                }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ListFlowJobsRequest extends Model
{
    /**
     * @description 是否为临时查询。用于过滤作业。
     *
     * @var bool
     */
    public $adhoc;

    /**
     * @description 作业ID。您可以调用ListFlowJob查看作业ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 作业名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 当前页数。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页的作业数量。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 项目ID。您可以调用ListFlowProject查看项目的ID。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 地域ID。您可以调用DescribeRegions查看最新的阿里云地域列表。
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 作业类型。用于过滤作业，支持的类型有：SPARK，SPARK_STREAMING，ZEPPELIN。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'adhoc'      => 'Adhoc',
        'id'         => 'Id',
        'name'       => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectId'  => 'ProjectId',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class ListMigrationJobsRequest extends Model
{
    /**
     * @description 任务名称
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortCol;

    /**
     * @var string
     */
    public $sortType;

    /**
     * @description 源
     *
     * @var string
     */
    public $source;

    /**
     * @description 来源系统,MigrationJobTypeEnum[DTS,SMC,OSS,value,desc]
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'     => 'name',
        'pageNum'  => 'pageNum',
        'pageSize' => 'pageSize',
        'sortCol'  => 'sortCol',
        'sortType' => 'sortType',
        'source'   => 'source',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->sortCol) {
            $res['sortCol'] = $this->sortCol;
        }
        if (null !== $this->sortType) {
            $res['sortType'] = $this->sortType;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMigrationJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['sortCol'])) {
            $model->sortCol = $map['sortCol'];
        }
        if (isset($map['sortType'])) {
            $model->sortType = $map['sortType'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

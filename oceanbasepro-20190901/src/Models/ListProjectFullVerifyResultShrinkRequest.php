<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListProjectFullVerifyResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $destSchemasShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @example np_4w5abs****
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $sourceSchemasShrink;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'destSchemasShrink'   => 'DestSchemas',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'projectId'           => 'ProjectId',
        'sourceSchemasShrink' => 'SourceSchemas',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destSchemasShrink) {
            $res['DestSchemas'] = $this->destSchemasShrink;
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
        if (null !== $this->sourceSchemasShrink) {
            $res['SourceSchemas'] = $this->sourceSchemasShrink;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectFullVerifyResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestSchemas'])) {
            $model->destSchemasShrink = $map['DestSchemas'];
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
        if (isset($map['SourceSchemas'])) {
            $model->sourceSchemasShrink = $map['SourceSchemas'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

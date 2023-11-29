<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListProjectFullVerifyResultRequest extends Model
{
    /**
     * @var string[]
     */
    public $destSchemas;

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
     * @var string[]
     */
    public $sourceSchemas;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'destSchemas'   => 'DestSchemas',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'projectId'     => 'ProjectId',
        'sourceSchemas' => 'SourceSchemas',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destSchemas) {
            $res['DestSchemas'] = $this->destSchemas;
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
        if (null !== $this->sourceSchemas) {
            $res['SourceSchemas'] = $this->sourceSchemas;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectFullVerifyResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestSchemas'])) {
            if (!empty($map['DestSchemas'])) {
                $model->destSchemas = $map['DestSchemas'];
            }
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
            if (!empty($map['SourceSchemas'])) {
                $model->sourceSchemas = $map['SourceSchemas'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

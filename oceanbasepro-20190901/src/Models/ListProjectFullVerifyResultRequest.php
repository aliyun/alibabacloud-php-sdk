<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ListProjectFullVerifyResultRequest extends Model
{
    /**
     * @var string[]
     */
    public $destSchemas;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $sourceSchemas;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'destSchemas' => 'DestSchemas',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sourceSchemas' => 'SourceSchemas',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->destSchemas)) {
            Model::validateArray($this->destSchemas);
        }
        if (\is_array($this->sourceSchemas)) {
            Model::validateArray($this->sourceSchemas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destSchemas) {
            if (\is_array($this->destSchemas)) {
                $res['DestSchemas'] = [];
                $n1 = 0;
                foreach ($this->destSchemas as $item1) {
                    $res['DestSchemas'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->sourceSchemas)) {
                $res['SourceSchemas'] = [];
                $n1 = 0;
                foreach ($this->sourceSchemas as $item1) {
                    $res['SourceSchemas'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DestSchemas'])) {
            if (!empty($map['DestSchemas'])) {
                $model->destSchemas = [];
                $n1 = 0;
                foreach ($map['DestSchemas'] as $item1) {
                    $model->destSchemas[$n1++] = $item1;
                }
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
                $model->sourceSchemas = [];
                $n1 = 0;
                foreach ($map['SourceSchemas'] as $item1) {
                    $model->sourceSchemas[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

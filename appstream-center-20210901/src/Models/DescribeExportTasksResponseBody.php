<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeExportTasksResponseBody\exportTaskModel;

class DescribeExportTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var exportTaskModel[]
     */
    public $exportTaskModel;

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
    public $requestId;
    protected $_name = [
        'count' => 'Count',
        'exportTaskModel' => 'ExportTaskModel',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->exportTaskModel)) {
            Model::validateArray($this->exportTaskModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->exportTaskModel) {
            if (\is_array($this->exportTaskModel)) {
                $res['ExportTaskModel'] = [];
                $n1 = 0;
                foreach ($this->exportTaskModel as $item1) {
                    $res['ExportTaskModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['ExportTaskModel'])) {
            if (!empty($map['ExportTaskModel'])) {
                $model->exportTaskModel = [];
                $n1 = 0;
                foreach ($map['ExportTaskModel'] as $item1) {
                    $model->exportTaskModel[$n1] = exportTaskModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

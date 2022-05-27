<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetDatasRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'datasetId'   => 'DatasetId',
        'identity'    => 'Identity',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetDatasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

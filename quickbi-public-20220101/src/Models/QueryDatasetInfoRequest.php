<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDatasetInfoRequest extends Model
{
    /**
     * @description Queries information about a specified dataset.
     *
     * This parameter is required.
     * @example a201c85c-******
     *
     * @var string
     */
    public $datasetId;
    protected $_name = [
        'datasetId' => 'DatasetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatasetInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDatasetDetailInfoRequest extends Model
{
    /**
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * This parameter is required.
     * @example 5820f58c-c734-4d8a-baf1-7979af4f****
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
     * @return QueryDatasetDetailInfoRequest
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

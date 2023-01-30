<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetItemResponseBody extends Model
{
    /**
     * @description The ID of the data entry.
     *
     * @example 5045****
     *
     * @var string
     */
    public $datasetItemId;

    /**
     * @description The ID of the request.
     *
     * @example 8A5E2053-4D9F-5280-B7A9-D357********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetItemId' => 'DatasetItemId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetItemId) {
            $res['DatasetItemId'] = $this->datasetItemId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetItemId'])) {
            $model->datasetItemId = $map['DatasetItemId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

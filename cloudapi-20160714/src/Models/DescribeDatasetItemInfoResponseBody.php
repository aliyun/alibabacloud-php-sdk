<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetItemInfoResponseBody\datasetItemInfo;
use AlibabaCloud\Tea\Model;

class DescribeDatasetItemInfoResponseBody extends Model
{
    /**
     * @description The Dataset information.
     *
     * @var datasetItemInfo
     */
    public $datasetItemInfo;

    /**
     * @description The ID of the request.
     *
     * @example 5BAFA85F-38E3-5D9E-9E32-4B09********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetItemInfo' => 'DatasetItemInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetItemInfo) {
            $res['DatasetItemInfo'] = null !== $this->datasetItemInfo ? $this->datasetItemInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatasetItemInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetItemInfo'])) {
            $model->datasetItemInfo = datasetItemInfo::fromMap($map['DatasetItemInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

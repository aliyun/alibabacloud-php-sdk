<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDatasetInfoResponseBody\datasetInfo;
use AlibabaCloud\Tea\Model;

class DescribeDatasetInfoResponseBody extends Model
{
    /**
     * @var datasetInfo
     */
    public $datasetInfo;

    /**
     * @example A2C8F75E-EE84-5C64-960F-45C8********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetInfo' => 'DatasetInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetInfo) {
            $res['DatasetInfo'] = null !== $this->datasetInfo ? $this->datasetInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatasetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetInfo'])) {
            $model->datasetInfo = datasetInfo::fromMap($map['DatasetInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

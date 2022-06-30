<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetResponseBody extends Model
{
    /**
     * @description 应用id
     *
     * @var string
     */
    public $customParam;

    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $datasetId;

    /**
     * @var int
     */
    public $datasetSize;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customParam' => 'CustomParam',
        'datasetId'   => 'DatasetId',
        'datasetSize' => 'DatasetSize',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customParam) {
            $res['CustomParam'] = $this->customParam;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetSize) {
            $res['DatasetSize'] = $this->datasetSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatasetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomParam'])) {
            $model->customParam = $map['CustomParam'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetSize'])) {
            $model->datasetSize = $map['DatasetSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

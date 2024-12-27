<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetResponseBody extends Model
{
    /**
     * @description The dataset.
     *
     * @var Dataset
     */
    public $dataset;

    /**
     * @description The request ID.
     *
     * @example 6D74B3A9-5AC0-49F9-914D-E01589D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataset'   => 'Dataset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toMap() : null;
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
        if (isset($map['Dataset'])) {
            $model->dataset = Dataset::fromMap($map['Dataset']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

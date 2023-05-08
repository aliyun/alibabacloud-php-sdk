<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeMetadataResponseBody\metaData;
use AlibabaCloud\Tea\Model;

class DescribeMetadataResponseBody extends Model
{
    /**
     * @description The metadata of ASM, which contains basic information about ASM.
     *
     * @var metaData
     */
    public $metaData;

    /**
     * @description The ID of the request.
     *
     * @example F93DDAD7-6E04-5AC3-86F4-852708******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metaData'  => 'MetaData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaData) {
            $res['MetaData'] = null !== $this->metaData ? $this->metaData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaData'])) {
            $model->metaData = metaData::fromMap($map['MetaData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CopyDataCacheResponseBody extends Model
{
    /**
     * @description The ID generated for the DataCache in the destination region.
     *
     * @example edc-bp1423y6d7v7l6ua****
     *
     * @var string
     */
    public $dataCacheId;

    /**
     * @description The request ID.
     *
     * @example 58EE0CB3-C864-5395-A4F7-24F425074839
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataCacheId' => 'DataCacheId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCacheId) {
            $res['DataCacheId'] = $this->dataCacheId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDataCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCacheId'])) {
            $model->dataCacheId = $map['DataCacheId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateDataCacheResponseBody extends Model
{
    /**
     * @description The DataCache ID.
     *
     * @example edc-bp15l4vvys94oo******
     *
     * @var string
     */
    public $dataCacheId;

    /**
     * @description The request ID.
     *
     * @example D81A4A13-6DCC-4579-AC62-90A6C3EC7BBC
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
     * @return CreateDataCacheResponseBody
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

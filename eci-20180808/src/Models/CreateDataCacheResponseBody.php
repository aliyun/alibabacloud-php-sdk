<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;

class CreateDataCacheResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataCacheId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataCacheId' => 'DataCacheId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

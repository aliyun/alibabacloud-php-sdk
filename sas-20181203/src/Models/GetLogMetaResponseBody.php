<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetLogMetaResponseBody\logMeta;
use AlibabaCloud\Tea\Model;

class GetLogMetaResponseBody extends Model
{
    /**
     * @description The data of a data shipping task.
     *
     * @var logMeta
     */
    public $logMeta;

    /**
     * @description The request ID.
     *
     * @example 3956048F-9D73-5EDB-834B-4827BB48****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logMeta'   => 'LogMeta',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logMeta) {
            $res['LogMeta'] = null !== $this->logMeta ? $this->logMeta->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogMeta'])) {
            $model->logMeta = logMeta::fromMap($map['LogMeta']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

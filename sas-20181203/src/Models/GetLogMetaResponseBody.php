<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetLogMetaResponseBody\logMeta;

class GetLogMetaResponseBody extends Model
{
    /**
     * @var logMeta
     */
    public $logMeta;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logMeta' => 'LogMeta',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->logMeta) {
            $this->logMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logMeta) {
            $res['LogMeta'] = null !== $this->logMeta ? $this->logMeta->toArray($noStream) : $this->logMeta;
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
        if (isset($map['LogMeta'])) {
            $model->logMeta = logMeta::fromMap($map['LogMeta']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

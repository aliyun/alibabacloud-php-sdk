<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDNADBResponseBody\DNADB;

class GetDNADBResponseBody extends Model
{
    /**
     * @var DNADB
     */
    public $DNADB;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNADB' => 'DNADB',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DNADB) {
            $this->DNADB->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DNADB) {
            $res['DNADB'] = null !== $this->DNADB ? $this->DNADB->toArray($noStream) : $this->DNADB;
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
        if (isset($map['DNADB'])) {
            $model->DNADB = DNADB::fromMap($map['DNADB']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

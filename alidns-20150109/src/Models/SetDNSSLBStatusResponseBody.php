<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDNSSLBStatusResponseBody extends Model
{
    /**
     * @description Indicates whether weighted round-robin is enabled for the subdomain.
     *
     * @example true
     *
     * @var bool
     */
    public $open;

    /**
     * @description The number of A records that are matched.
     *
     * @example 8
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description The ID of the request.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'open'        => 'Open',
        'recordCount' => 'RecordCount',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDNSSLBStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

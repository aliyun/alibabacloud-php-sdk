<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceResponseBody\protocolServices;
use AlibabaCloud\Tea\Model;

class DescribeProtocolServiceResponseBody extends Model
{
    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example aBcdeg==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The information about protocol services.
     *
     * @var protocolServices[]
     */
    public $protocolServices;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'protocolServices' => 'ProtocolServices',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->protocolServices) {
            $res['ProtocolServices'] = [];
            if (null !== $this->protocolServices && \is_array($this->protocolServices)) {
                $n = 0;
                foreach ($this->protocolServices as $item) {
                    $res['ProtocolServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtocolServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProtocolServices'])) {
            if (!empty($map['ProtocolServices'])) {
                $model->protocolServices = [];
                $n                       = 0;
                foreach ($map['ProtocolServices'] as $item) {
                    $model->protocolServices[$n++] = null !== $item ? protocolServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

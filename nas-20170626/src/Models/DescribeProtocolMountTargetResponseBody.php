<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetResponseBody\protocolMountTargets;
use AlibabaCloud\Tea\Model;

class DescribeProtocolMountTargetResponseBody extends Model
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
     * @description The export directories of the protocol service.
     *
     * @var protocolMountTargets[]
     */
    public $protocolMountTargets;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'protocolMountTargets' => 'ProtocolMountTargets',
        'requestId'            => 'RequestId',
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
        if (null !== $this->protocolMountTargets) {
            $res['ProtocolMountTargets'] = [];
            if (null !== $this->protocolMountTargets && \is_array($this->protocolMountTargets)) {
                $n = 0;
                foreach ($this->protocolMountTargets as $item) {
                    $res['ProtocolMountTargets'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeProtocolMountTargetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProtocolMountTargets'])) {
            if (!empty($map['ProtocolMountTargets'])) {
                $model->protocolMountTargets = [];
                $n                           = 0;
                foreach ($map['ProtocolMountTargets'] as $item) {
                    $model->protocolMountTargets[$n++] = null !== $item ? protocolMountTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

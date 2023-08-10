<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody\resourceShareInvitations;
use AlibabaCloud\Tea\Model;

class ListResourceShareInvitationsResponseBody extends Model
{
    /**
     * @description The `token` that is used to initiate the next request. If the response of the current request is truncated, you can use the token to initiate another request and obtain the remaining records.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 30EC8328-1BDE-51D5-BFAB-039508BD91A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the resource sharing invitations.
     *
     * @var resourceShareInvitations[]
     */
    public $resourceShareInvitations;
    protected $_name = [
        'nextToken'                => 'NextToken',
        'requestId'                => 'RequestId',
        'resourceShareInvitations' => 'ResourceShareInvitations',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceShareInvitations) {
            $res['ResourceShareInvitations'] = [];
            if (null !== $this->resourceShareInvitations && \is_array($this->resourceShareInvitations)) {
                $n = 0;
                foreach ($this->resourceShareInvitations as $item) {
                    $res['ResourceShareInvitations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceShareInvitationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceShareInvitations'])) {
            if (!empty($map['ResourceShareInvitations'])) {
                $model->resourceShareInvitations = [];
                $n                               = 0;
                foreach ($map['ResourceShareInvitations'] as $item) {
                    $model->resourceShareInvitations[$n++] = null !== $item ? resourceShareInvitations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListResourceShareInvitationsRequest extends Model
{
    /**
     * @description The maximum number of entries to return for a single request.
     *
     * Valid values: 1 to 100. Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The `token` that is used to initiate the next request. If the response of the current request is truncated, you can use the token to initiate another request and obtain the remaining records.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The IDs of the resource shares.
     *
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @description The IDs of the resource sharing invitations.
     *
     * @var string[]
     */
    public $resourceShareInvitationIds;
    protected $_name = [
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'resourceShareIds'           => 'ResourceShareIds',
        'resourceShareInvitationIds' => 'ResourceShareInvitationIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceShareInvitationIds) {
            $res['ResourceShareInvitationIds'] = $this->resourceShareInvitationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceShareInvitationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceShareInvitationIds'])) {
            if (!empty($map['ResourceShareInvitationIds'])) {
                $model->resourceShareInvitationIds = $map['ResourceShareInvitationIds'];
            }
        }

        return $model;
    }
}

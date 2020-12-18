<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListResourceSharesRequest extends Model
{
    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string
     */
    public $resourceShareName;

    /**
     * @var string
     */
    public $resourceShareStatus;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'resourceShareIds'    => 'ResourceShareIds',
        'resourceOwner'       => 'ResourceOwner',
        'resourceShareName'   => 'ResourceShareName',
        'resourceShareStatus' => 'ResourceShareStatus',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
    ];

    public function validate()
    {
        Model::validateRequired('resourceOwner', $this->resourceOwner, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->resourceShareStatus) {
            $res['ResourceShareStatus'] = $this->resourceShareStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceSharesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['ResourceShareStatus'])) {
            $model->resourceShareStatus = $map['ResourceShareStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}

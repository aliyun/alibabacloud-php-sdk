<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;

class ListResourceShareInvitationsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string[]
     */
    public $resourceShareInvitationIds;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceShareIds' => 'ResourceShareIds',
        'resourceShareInvitationIds' => 'ResourceShareInvitationIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceShareIds)) {
            Model::validateArray($this->resourceShareIds);
        }
        if (\is_array($this->resourceShareInvitationIds)) {
            Model::validateArray($this->resourceShareInvitationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceShareIds) {
            if (\is_array($this->resourceShareIds)) {
                $res['ResourceShareIds'] = [];
                $n1 = 0;
                foreach ($this->resourceShareIds as $item1) {
                    $res['ResourceShareIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceShareInvitationIds) {
            if (\is_array($this->resourceShareInvitationIds)) {
                $res['ResourceShareInvitationIds'] = [];
                $n1 = 0;
                foreach ($this->resourceShareInvitationIds as $item1) {
                    $res['ResourceShareInvitationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = [];
                $n1 = 0;
                foreach ($map['ResourceShareIds'] as $item1) {
                    $model->resourceShareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceShareInvitationIds'])) {
            if (!empty($map['ResourceShareInvitationIds'])) {
                $model->resourceShareInvitationIds = [];
                $n1 = 0;
                foreach ($map['ResourceShareInvitationIds'] as $item1) {
                    $model->resourceShareInvitationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

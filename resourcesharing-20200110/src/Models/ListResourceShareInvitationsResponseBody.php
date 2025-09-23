<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceShareInvitationsResponseBody\resourceShareInvitations;

class ListResourceShareInvitationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceShareInvitations[]
     */
    public $resourceShareInvitations;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceShareInvitations' => 'ResourceShareInvitations',
    ];

    public function validate()
    {
        if (\is_array($this->resourceShareInvitations)) {
            Model::validateArray($this->resourceShareInvitations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceShareInvitations) {
            if (\is_array($this->resourceShareInvitations)) {
                $res['ResourceShareInvitations'] = [];
                $n1 = 0;
                foreach ($this->resourceShareInvitations as $item1) {
                    $res['ResourceShareInvitations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceShareInvitations'])) {
            if (!empty($map['ResourceShareInvitations'])) {
                $model->resourceShareInvitations = [];
                $n1 = 0;
                foreach ($map['ResourceShareInvitations'] as $item1) {
                    $model->resourceShareInvitations[$n1] = resourceShareInvitations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

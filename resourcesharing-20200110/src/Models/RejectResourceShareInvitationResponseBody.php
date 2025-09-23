<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\RejectResourceShareInvitationResponseBody\resourceShareInvitation;

class RejectResourceShareInvitationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceShareInvitation
     */
    public $resourceShareInvitation;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceShareInvitation' => 'ResourceShareInvitation',
    ];

    public function validate()
    {
        if (null !== $this->resourceShareInvitation) {
            $this->resourceShareInvitation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceShareInvitation) {
            $res['ResourceShareInvitation'] = null !== $this->resourceShareInvitation ? $this->resourceShareInvitation->toArray($noStream) : $this->resourceShareInvitation;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceShareInvitation'])) {
            $model->resourceShareInvitation = resourceShareInvitation::fromMap($map['ResourceShareInvitation']);
        }

        return $model;
    }
}

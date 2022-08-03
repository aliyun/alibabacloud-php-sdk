<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\AcceptResourceShareInvitationResponseBody\resourceShareInvitation;
use AlibabaCloud\Tea\Model;

class AcceptResourceShareInvitationResponseBody extends Model
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
        'requestId'               => 'RequestId',
        'resourceShareInvitation' => 'ResourceShareInvitation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceShareInvitation) {
            $res['ResourceShareInvitation'] = null !== $this->resourceShareInvitation ? $this->resourceShareInvitation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptResourceShareInvitationResponseBody
     */
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

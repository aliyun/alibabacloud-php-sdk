<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ScheduleKeyDeletionRequest extends Model
{
    /**
     * @description The ID of the customer master key (CMK). The ID must be globally unique.
     *
     * @example 7906979c-8e06-46a2-be2d-68e3ccbc****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The scheduled period after which the CMK is deleted. During this period, the CMK is in the PendingDeletion state. After this period ends, you cannot cancel the key deletion task.
     *
     * Unit: days.
     * @example 7
     *
     * @var int
     */
    public $pendingWindowInDays;
    protected $_name = [
        'keyId'               => 'KeyId',
        'pendingWindowInDays' => 'PendingWindowInDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->pendingWindowInDays) {
            $res['PendingWindowInDays'] = $this->pendingWindowInDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduleKeyDeletionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['PendingWindowInDays'])) {
            $model->pendingWindowInDays = $map['PendingWindowInDays'];
        }

        return $model;
    }
}

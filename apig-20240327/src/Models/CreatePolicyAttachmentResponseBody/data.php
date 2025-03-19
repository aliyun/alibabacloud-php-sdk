<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Policy Mount ID
     *
     * @example pr-cqooju5lhtgquuj6***
     *
     * @var string
     */
    public $policyAttachmentId;
    protected $_name = [
        'policyAttachmentId' => 'policyAttachmentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyAttachmentId) {
            $res['policyAttachmentId'] = $this->policyAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['policyAttachmentId'])) {
            $model->policyAttachmentId = $map['policyAttachmentId'];
        }

        return $model;
    }
}

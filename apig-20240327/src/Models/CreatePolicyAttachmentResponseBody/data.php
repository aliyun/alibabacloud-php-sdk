<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreatePolicyAttachmentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $policyAttachmentId;
    protected $_name = [
        'policyAttachmentId' => 'policyAttachmentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyAttachmentId) {
            $res['policyAttachmentId'] = $this->policyAttachmentId;
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
        if (isset($map['policyAttachmentId'])) {
            $model->policyAttachmentId = $map['policyAttachmentId'];
        }

        return $model;
    }
}

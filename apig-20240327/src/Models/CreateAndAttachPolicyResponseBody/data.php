<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateAndAttachPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\Attachment;

class data extends Model
{
    /**
     * @var Attachment
     */
    public $attachment;

    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'attachment' => 'attachment',
        'policyId' => 'policyId',
    ];

    public function validate()
    {
        if (null !== $this->attachment) {
            $this->attachment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachment) {
            $res['attachment'] = null !== $this->attachment ? $this->attachment->toArray($noStream) : $this->attachment;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
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
        if (isset($map['attachment'])) {
            $model->attachment = Attachment::fromMap($map['attachment']);
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}

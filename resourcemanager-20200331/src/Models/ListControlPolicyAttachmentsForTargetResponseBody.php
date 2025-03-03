<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;

class ListControlPolicyAttachmentsForTargetResponseBody extends Model
{
    /**
     * @var controlPolicyAttachments
     */
    public $controlPolicyAttachments;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlPolicyAttachments' => 'ControlPolicyAttachments',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->controlPolicyAttachments) {
            $this->controlPolicyAttachments->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlPolicyAttachments) {
            $res['ControlPolicyAttachments'] = null !== $this->controlPolicyAttachments ? $this->controlPolicyAttachments->toArray($noStream) : $this->controlPolicyAttachments;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ControlPolicyAttachments'])) {
            $model->controlPolicyAttachments = controlPolicyAttachments::fromMap($map['ControlPolicyAttachments']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;
use AlibabaCloud\Tea\Model;

class ListControlPolicyAttachmentsForTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var controlPolicyAttachments
     */
    public $controlPolicyAttachments;
    protected $_name = [
        'requestId'                => 'RequestId',
        'controlPolicyAttachments' => 'ControlPolicyAttachments',
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
        if (null !== $this->controlPolicyAttachments) {
            $res['ControlPolicyAttachments'] = null !== $this->controlPolicyAttachments ? $this->controlPolicyAttachments->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListControlPolicyAttachmentsForTargetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ControlPolicyAttachments'])) {
            $model->controlPolicyAttachments = controlPolicyAttachments::fromMap($map['ControlPolicyAttachments']);
        }

        return $model;
    }
}

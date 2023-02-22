<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments;
use AlibabaCloud\Tea\Model;

class ListControlPolicyAttachmentsForTargetResponseBody extends Model
{
    /**
     * @var controlPolicyAttachments
     */
    public $controlPolicyAttachments;

    /**
     * @example C276B600-7B7A-49E8-938C-E16CFA955A82
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlPolicyAttachments' => 'ControlPolicyAttachments',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicyAttachments) {
            $res['ControlPolicyAttachments'] = null !== $this->controlPolicyAttachments ? $this->controlPolicyAttachments->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ControlPolicyAttachments'])) {
            $model->controlPolicyAttachments = controlPolicyAttachments::fromMap($map['ControlPolicyAttachments']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

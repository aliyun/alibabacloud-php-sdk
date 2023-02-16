<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListTargetAttachmentsForControlPolicyResponseBody\targetAttachments\targetAttachment;
use AlibabaCloud\Tea\Model;

class targetAttachments extends Model
{
    /**
     * @var targetAttachment[]
     */
    public $targetAttachment;
    protected $_name = [
        'targetAttachment' => 'TargetAttachment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetAttachment) {
            $res['TargetAttachment'] = [];
            if (null !== $this->targetAttachment && \is_array($this->targetAttachment)) {
                $n = 0;
                foreach ($this->targetAttachment as $item) {
                    $res['TargetAttachment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetAttachment'])) {
            if (!empty($map['TargetAttachment'])) {
                $model->targetAttachment = [];
                $n                       = 0;
                foreach ($map['TargetAttachment'] as $item) {
                    $model->targetAttachment[$n++] = null !== $item ? targetAttachment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

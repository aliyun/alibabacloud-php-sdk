<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPolicyAttachmentsForTargetResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments\controlPolicyAttachment;
use AlibabaCloud\Tea\Model;

class controlPolicyAttachments extends Model
{
    /**
     * @var controlPolicyAttachment[]
     */
    public $controlPolicyAttachment;
    protected $_name = [
        'controlPolicyAttachment' => 'ControlPolicyAttachment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicyAttachment) {
            $res['ControlPolicyAttachment'] = [];
            if (null !== $this->controlPolicyAttachment && \is_array($this->controlPolicyAttachment)) {
                $n = 0;
                foreach ($this->controlPolicyAttachment as $item) {
                    $res['ControlPolicyAttachment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPolicyAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlPolicyAttachment'])) {
            if (!empty($map['ControlPolicyAttachment'])) {
                $model->controlPolicyAttachment = [];
                $n                              = 0;
                foreach ($map['ControlPolicyAttachment'] as $item) {
                    $model->controlPolicyAttachment[$n++] = null !== $item ? controlPolicyAttachment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

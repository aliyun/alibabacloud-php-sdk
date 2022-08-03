<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyAttachmentsResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyAttachmentsResponseBody\policyAttachments\policyAttachment;
use AlibabaCloud\Tea\Model;

class policyAttachments extends Model
{
    /**
     * @var policyAttachment[]
     */
    public $policyAttachment;
    protected $_name = [
        'policyAttachment' => 'PolicyAttachment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyAttachment) {
            $res['PolicyAttachment'] = [];
            if (null !== $this->policyAttachment && \is_array($this->policyAttachment)) {
                $n = 0;
                foreach ($this->policyAttachment as $item) {
                    $res['PolicyAttachment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyAttachment'])) {
            if (!empty($map['PolicyAttachment'])) {
                $model->policyAttachment = [];
                $n                       = 0;
                foreach ($map['PolicyAttachment'] as $item) {
                    $model->policyAttachment[$n++] = null !== $item ? policyAttachment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

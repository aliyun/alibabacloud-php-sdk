<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTargetAttachmentsForControlPolicyResponseBody\targetAttachments\targetAttachment;

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
        if (\is_array($this->targetAttachment)) {
            Model::validateArray($this->targetAttachment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetAttachment) {
            if (\is_array($this->targetAttachment)) {
                $res['TargetAttachment'] = [];
                $n1                      = 0;
                foreach ($this->targetAttachment as $item1) {
                    $res['TargetAttachment'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['TargetAttachment'])) {
            if (!empty($map['TargetAttachment'])) {
                $model->targetAttachment = [];
                $n1                      = 0;
                foreach ($map['TargetAttachment'] as $item1) {
                    $model->targetAttachment[$n1++] = targetAttachment::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

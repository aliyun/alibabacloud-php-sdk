<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPolicyAttachmentsForTargetResponseBody\controlPolicyAttachments\controlPolicyAttachment;

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
        if (\is_array($this->controlPolicyAttachment)) {
            Model::validateArray($this->controlPolicyAttachment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlPolicyAttachment) {
            if (\is_array($this->controlPolicyAttachment)) {
                $res['ControlPolicyAttachment'] = [];
                $n1                             = 0;
                foreach ($this->controlPolicyAttachment as $item1) {
                    $res['ControlPolicyAttachment'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ControlPolicyAttachment'])) {
            if (!empty($map['ControlPolicyAttachment'])) {
                $model->controlPolicyAttachment = [];
                $n1                             = 0;
                foreach ($map['ControlPolicyAttachment'] as $item1) {
                    $model->controlPolicyAttachment[$n1++] = controlPolicyAttachment::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

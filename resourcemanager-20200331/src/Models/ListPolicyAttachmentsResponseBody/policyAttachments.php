<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListPolicyAttachmentsResponseBody\policyAttachments\policyAttachment;

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
        if (\is_array($this->policyAttachment)) {
            Model::validateArray($this->policyAttachment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyAttachment) {
            if (\is_array($this->policyAttachment)) {
                $res['PolicyAttachment'] = [];
                $n1 = 0;
                foreach ($this->policyAttachment as $item1) {
                    $res['PolicyAttachment'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PolicyAttachment'])) {
            if (!empty($map['PolicyAttachment'])) {
                $model->policyAttachment = [];
                $n1 = 0;
                foreach ($map['PolicyAttachment'] as $item1) {
                    $model->policyAttachment[$n1] = policyAttachment::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\internetAclPolicyList;

use AlibabaCloud\Dara\Model;

class aclPolicyList extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $entry;
    protected $_name = [
        'comment' => 'Comment',
        'entry' => 'Entry',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }

        return $model;
    }
}

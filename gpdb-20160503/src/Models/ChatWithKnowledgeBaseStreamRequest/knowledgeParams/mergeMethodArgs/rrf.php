<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\knowledgeParams\mergeMethodArgs;

use AlibabaCloud\Dara\Model;

class rrf extends Model
{
    /**
     * @var int
     */
    public $k;
    protected $_name = [
        'k' => 'K',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k) {
            $res['K'] = $this->k;
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
        if (isset($map['K'])) {
            $model->k = $map['K'];
        }

        return $model;
    }
}

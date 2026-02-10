<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponseBody\usage\rag;

class usage extends Model
{
    /**
     * @var rag
     */
    public $rag;
    protected $_name = [
        'rag' => 'rag',
    ];

    public function validate()
    {
        if (null !== $this->rag) {
            $this->rag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rag) {
            $res['rag'] = null !== $this->rag ? $this->rag->toArray($noStream) : $this->rag;
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
        if (isset($map['rag'])) {
            $model->rag = rag::fromMap($map['rag']);
        }

        return $model;
    }
}

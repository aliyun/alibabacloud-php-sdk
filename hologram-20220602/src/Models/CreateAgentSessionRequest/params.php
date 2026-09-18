<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220602\Models\CreateAgentSessionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220602\Models\CreateAgentSessionRequest\params\meta;

class params extends Model
{
    /**
     * @var meta
     */
    public $meta;
    protected $_name = [
        'meta' => 'Meta',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
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
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        return $model;
    }
}

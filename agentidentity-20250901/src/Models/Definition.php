<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\Definition\cedar;

class Definition extends Model
{
    /**
     * @var cedar
     */
    public $cedar;
    protected $_name = [
        'cedar' => 'Cedar',
    ];

    public function validate()
    {
        if (null !== $this->cedar) {
            $this->cedar->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cedar) {
            $res['Cedar'] = null !== $this->cedar ? $this->cedar->toArray($noStream) : $this->cedar;
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
        if (isset($map['Cedar'])) {
            $model->cedar = cedar::fromMap($map['Cedar']);
        }

        return $model;
    }
}

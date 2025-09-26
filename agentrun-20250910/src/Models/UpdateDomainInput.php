<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateDomainInput extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'certIdentifier' => 'certIdentifier',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}

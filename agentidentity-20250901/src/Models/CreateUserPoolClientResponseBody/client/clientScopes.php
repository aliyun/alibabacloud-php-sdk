<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolClientResponseBody\client;

use AlibabaCloud\Dara\Model;

class clientScopes extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scopeName;
    protected $_name = [
        'description' => 'Description',
        'scopeName' => 'ScopeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->scopeName) {
            $res['ScopeName'] = $this->scopeName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ScopeName'])) {
            $model->scopeName = $map['ScopeName'];
        }

        return $model;
    }
}

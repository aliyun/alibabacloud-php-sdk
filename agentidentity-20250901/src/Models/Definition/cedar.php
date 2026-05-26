<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\Definition;

use AlibabaCloud\Dara\Model;

class cedar extends Model
{
    /**
     * @var string
     */
    public $statement;
    protected $_name = [
        'statement' => 'Statement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statement) {
            $res['Statement'] = $this->statement;
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
        if (isset($map['Statement'])) {
            $model->statement = $map['Statement'];
        }

        return $model;
    }
}

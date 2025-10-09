<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\outputs;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $guid;
    protected $_name = [
        'guid' => 'Guid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
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
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        return $model;
    }
}

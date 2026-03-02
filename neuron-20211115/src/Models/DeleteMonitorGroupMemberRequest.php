<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class DeleteMonitorGroupMemberRequest extends Model
{
    /**
     * @var string
     */
    public $contactIds;
    protected $_name = [
        'contactIds' => 'contactIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIds) {
            $res['contactIds'] = $this->contactIds;
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
        if (isset($map['contactIds'])) {
            $model->contactIds = $map['contactIds'];
        }

        return $model;
    }
}

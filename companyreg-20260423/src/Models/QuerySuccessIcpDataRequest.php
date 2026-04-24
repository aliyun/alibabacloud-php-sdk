<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models;

use AlibabaCloud\Dara\Model;

class QuerySuccessIcpDataRequest extends Model
{
    /**
     * @var string
     */
    public $caller;
    protected $_name = [
        'caller' => 'Caller',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
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
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }

        return $model;
    }
}

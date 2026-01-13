<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigRequest\recallConfig\operators;

use AlibabaCloud\Dara\Model;

class filterConfig extends Model
{
    /**
     * @var string
     */
    public $experession;
    protected $_name = [
        'experession' => 'Experession',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experession) {
            $res['Experession'] = $this->experession;
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
        if (isset($map['Experession'])) {
            $model->experession = $map['Experession'];
        }

        return $model;
    }
}

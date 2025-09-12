<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request;

use AlibabaCloud\Dara\Model;

class agentNodeGroup extends Model
{
    /**
     * @var int
     */
    public $cu;
    protected $_name = [
        'cu' => 'cu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
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
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        return $model;
    }
}

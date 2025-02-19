<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;

use AlibabaCloud\Dara\Model;

class AINodeSpecInfos extends Model
{
    /**
     * @var string
     */
    public $AINodeNum;
    /**
     * @var string
     */
    public $AINodeSpec;
    protected $_name = [
        'AINodeNum'  => 'AINodeNum',
        'AINodeSpec' => 'AINodeSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AINodeNum) {
            $res['AINodeNum'] = $this->AINodeNum;
        }

        if (null !== $this->AINodeSpec) {
            $res['AINodeSpec'] = $this->AINodeSpec;
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
        if (isset($map['AINodeNum'])) {
            $model->AINodeNum = $map['AINodeNum'];
        }

        if (isset($map['AINodeSpec'])) {
            $model->AINodeSpec = $map['AINodeSpec'];
        }

        return $model;
    }
}

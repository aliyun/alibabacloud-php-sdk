<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;

class nodepoolInfo extends Model
{
    /**
     * @var string
     */
    public $nodepoolId;
    protected $_name = [
        'nodepoolId' => 'NodepoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['NodepoolId'] = $this->nodepoolId;
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
        if (isset($map['NodepoolId'])) {
            $model->nodepoolId = $map['NodepoolId'];
        }

        return $model;
    }
}

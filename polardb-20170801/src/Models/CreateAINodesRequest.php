<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateAINodesRequest\DBNodes;

class CreateAINodesRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBNodes' => 'DBNodes',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodes)) {
            Model::validateArray($this->DBNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBNodes) {
            if (\is_array($this->DBNodes)) {
                $res['DBNodes'] = [];
                $n1 = 0;
                foreach ($this->DBNodes as $item1) {
                    $res['DBNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBNodes'])) {
            if (!empty($map['DBNodes'])) {
                $model->DBNodes = [];
                $n1 = 0;
                foreach ($map['DBNodes'] as $item1) {
                    $model->DBNodes[$n1] = DBNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;

class data extends Model
{
    /**
     * @var logicInstanceTopology
     */
    public $logicInstanceTopology;
    protected $_name = [
        'logicInstanceTopology' => 'LogicInstanceTopology',
    ];

    public function validate()
    {
        if (null !== $this->logicInstanceTopology) {
            $this->logicInstanceTopology->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicInstanceTopology) {
            $res['LogicInstanceTopology'] = null !== $this->logicInstanceTopology ? $this->logicInstanceTopology->toArray($noStream) : $this->logicInstanceTopology;
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
        if (isset($map['LogicInstanceTopology'])) {
            $model->logicInstanceTopology = logicInstanceTopology::fromMap($map['LogicInstanceTopology']);
        }

        return $model;
    }
}

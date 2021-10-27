<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicInstanceTopology) {
            $res['LogicInstanceTopology'] = null !== $this->logicInstanceTopology ? $this->logicInstanceTopology->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicInstanceTopology'])) {
            $model->logicInstanceTopology = logicInstanceTopology::fromMap($map['LogicInstanceTopology']);
        }

        return $model;
    }
}

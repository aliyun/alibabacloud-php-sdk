<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody\rdsDrdsDbs;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody\rdsDrdsDbs\rdsDrdsDb\DBList;
use AlibabaCloud\Tea\Model;

class rdsDrdsDb extends Model
{
    /**
     * @var DBList
     */
    public $DBList;

    /**
     * @var string
     */
    public $rdsId;
    protected $_name = [
        'DBList' => 'DBList',
        'rdsId'  => 'RdsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBList) {
            $res['DBList'] = null !== $this->DBList ? $this->DBList->toMap() : null;
        }
        if (null !== $this->rdsId) {
            $res['RdsId'] = $this->rdsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsDrdsDb
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBList'])) {
            $model->DBList = DBList::fromMap($map['DBList']);
        }
        if (isset($map['RdsId'])) {
            $model->rdsId = $map['RdsId'];
        }

        return $model;
    }
}

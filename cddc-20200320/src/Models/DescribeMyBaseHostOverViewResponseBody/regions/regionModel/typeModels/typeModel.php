<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewResponseBody\regions\regionModel\typeModels;

use AlibabaCloud\Tea\Model;

class typeModel extends Model
{
    /**
     * @var string
     */
    public $hostEngineCount;

    /**
     * @var string
     */
    public $hostDateType;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'hostEngineCount' => 'HostEngineCount',
        'hostDateType'    => 'HostDateType',
        'count'           => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostEngineCount) {
            $res['HostEngineCount'] = $this->hostEngineCount;
        }
        if (null !== $this->hostDateType) {
            $res['HostDateType'] = $this->hostDateType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostEngineCount'])) {
            $model->hostEngineCount = $map['HostEngineCount'];
        }
        if (isset($map['HostDateType'])) {
            $model->hostDateType = $map['HostDateType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}

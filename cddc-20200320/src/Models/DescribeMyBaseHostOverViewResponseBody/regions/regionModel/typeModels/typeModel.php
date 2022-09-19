<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewResponseBody\regions\regionModel\typeModels;

use AlibabaCloud\Tea\Model;

class typeModel extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $hostDateType;

    /**
     * @var string
     */
    public $hostEngineCount;
    protected $_name = [
        'count'           => 'Count',
        'hostDateType'    => 'HostDateType',
        'hostEngineCount' => 'HostEngineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hostDateType) {
            $res['HostDateType'] = $this->hostDateType;
        }
        if (null !== $this->hostEngineCount) {
            $res['HostEngineCount'] = $this->hostEngineCount;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HostDateType'])) {
            $model->hostDateType = $map['HostDateType'];
        }
        if (isset($map['HostEngineCount'])) {
            $model->hostEngineCount = $map['HostEngineCount'];
        }

        return $model;
    }
}

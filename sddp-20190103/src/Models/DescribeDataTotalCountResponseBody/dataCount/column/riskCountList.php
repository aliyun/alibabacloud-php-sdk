<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount\column;

use AlibabaCloud\Tea\Model;

class riskCountList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'name'  => 'Name',
        'id'    => 'Id',
        'count' => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}

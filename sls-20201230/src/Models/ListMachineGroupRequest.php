<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListMachineGroupRequest extends Model
{
    /**
     * @description 可将 groupName 作为 pattern 匹配名称，只会返回匹配的机器组。例如 test 可以匹配机器组 test-group。
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 分页请求的起始位置。默认为0。
     *
     * @var int
     */
    public $offset;

    /**
     * @description 分页查询时，设置的每页行数。默认值为2000。
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'groupName' => 'groupName',
        'offset'    => 'offset',
        'size'      => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}

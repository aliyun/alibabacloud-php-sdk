<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListMachineGroupRequest extends Model
{
    /**
     * @description The name of the machine group. This parameter is used to filter machine groups. Partial match is supported.
     *
     * @example test-machine-group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The line from which the query starts. Default value: 0.
     *
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page. Maximum value: 500.
     *
     * @example 10
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

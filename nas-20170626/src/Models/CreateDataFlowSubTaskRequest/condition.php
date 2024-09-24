<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskRequest;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @example 1725897600000000000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 68
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'modifyTime' => 'ModifyTime',
        'size'       => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}

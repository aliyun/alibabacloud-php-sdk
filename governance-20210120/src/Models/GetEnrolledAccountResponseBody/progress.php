<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponseBody;

use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @description 基线项名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 基线项实施状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name'   => 'Name',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

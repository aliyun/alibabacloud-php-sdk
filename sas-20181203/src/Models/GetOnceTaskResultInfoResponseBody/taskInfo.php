<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOnceTaskResultInfoResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @example START
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

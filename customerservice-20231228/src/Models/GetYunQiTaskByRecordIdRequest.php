<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class GetYunQiTaskByRecordIdRequest extends Model
{
    /**
     * @var string
     */
    public $recordId;
    protected $_name = [
        'recordId' => 'recordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetYunQiTaskByRecordIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        return $model;
    }
}

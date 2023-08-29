<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\PushReportResponseBody;

use AlibabaCloud\Tea\Model;

class pushResult extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'resultMsg' => 'ResultMsg',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

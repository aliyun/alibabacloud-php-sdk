<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponseBody\preCheckItems;

use AlibabaCloud\Tea\Model;

class preCheckItems extends Model
{
    /**
     * @example CHECK_MASTER_DB_STATUS
     *
     * @var string
     */
    public $code;

    /**
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

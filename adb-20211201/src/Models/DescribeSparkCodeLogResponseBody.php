<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSparkCodeLogResponseBody extends Model
{
    /**
     * @example >>>>>>>> stdout:n++++++++++++++++++executing sql: MSCK REPAIR TABLE  `footprint_ethereum`.`dwd_eth_eth_txr_v2_di` n++n
     *
     * @var string
     */
    public $log;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1CD65640-9963-5D60-929C-118F2C84070E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'log'       => 'Log',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSparkCodeLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

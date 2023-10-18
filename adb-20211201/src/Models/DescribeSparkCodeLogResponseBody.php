<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeSparkCodeLogResponseBody extends Model
{
    /**
     * @description The content of the log.
     *
     * @example >>>>>>>> stdout:n++++++++++++++++++executing sql: MSCK REPAIR TABLE  `footprint_ethereum`.`dwd_eth_eth_txr_v2_di` n++n
     *
     * @var string
     */
    public $log;

    /**
     * @description The returned message.
     *
     *   If the request was successful, **Success** is returned.
     *   If the request failed, an error message is returned.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 1CD65640-9963-5D60-929C-118F2C84070E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
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

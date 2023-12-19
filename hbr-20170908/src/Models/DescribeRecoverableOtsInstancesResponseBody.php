<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRecoverableOtsInstancesResponseBody\otsInstances;
use AlibabaCloud\Tea\Model;

class DescribeRecoverableOtsInstancesResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The list of Tablestore instances that can be restored and the tables in the instances.
     *
     * @var otsInstances[]
     */
    public $otsInstances;

    /**
     * @description The ID of the request.
     *
     * @example 14DC089E-5DD3-5028-AEDB-93D78E11DB2A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful.
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'otsInstances' => 'OtsInstances',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->otsInstances) {
            $res['OtsInstances'] = [];
            if (null !== $this->otsInstances && \is_array($this->otsInstances)) {
                $n = 0;
                foreach ($this->otsInstances as $item) {
                    $res['OtsInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeRecoverableOtsInstancesResponseBody
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
        if (isset($map['OtsInstances'])) {
            if (!empty($map['OtsInstances'])) {
                $model->otsInstances = [];
                $n                   = 0;
                foreach ($map['OtsInstances'] as $item) {
                    $model->otsInstances[$n++] = null !== $item ? otsInstances::fromMap($item) : $item;
                }
            }
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

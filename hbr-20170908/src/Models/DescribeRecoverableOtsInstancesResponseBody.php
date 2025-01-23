<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRecoverableOtsInstancesResponseBody\otsInstances;

class DescribeRecoverableOtsInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var otsInstances[]
     */
    public $otsInstances;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->otsInstances)) {
            Model::validateArray($this->otsInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->otsInstances) {
            if (\is_array($this->otsInstances)) {
                $res['OtsInstances'] = [];
                $n1                  = 0;
                foreach ($this->otsInstances as $item1) {
                    $res['OtsInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                  = 0;
                foreach ($map['OtsInstances'] as $item1) {
                    $model->otsInstances[$n1++] = otsInstances::fromMap($item1);
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

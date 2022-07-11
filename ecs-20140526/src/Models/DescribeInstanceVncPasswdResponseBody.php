<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceVncPasswdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vncPasswd;
    protected $_name = [
        'requestId' => 'RequestId',
        'vncPasswd' => 'VncPasswd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vncPasswd) {
            $res['VncPasswd'] = $this->vncPasswd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceVncPasswdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VncPasswd'])) {
            $model->vncPasswd = $map['VncPasswd'];
        }

        return $model;
    }
}

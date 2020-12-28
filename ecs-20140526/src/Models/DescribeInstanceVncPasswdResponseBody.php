<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceVncPasswdResponseBody extends Model
{
    /**
     * @var string
     */
    public $vncPasswd;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'vncPasswd' => 'VncPasswd',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vncPasswd) {
            $res['VncPasswd'] = $this->vncPasswd;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['VncPasswd'])) {
            $model->vncPasswd = $map['VncPasswd'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

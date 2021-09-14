<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\AddHostsToBastionResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $hostPrivateIp;
    protected $_name = [
        'code'          => 'Code',
        'hostName'      => 'HostName',
        'message'       => 'Message',
        'hostPrivateIp' => 'HostPrivateIp',
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
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->hostPrivateIp) {
            $res['HostPrivateIp'] = $this->hostPrivateIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HostPrivateIp'])) {
            $model->hostPrivateIp = $map['HostPrivateIp'];
        }

        return $model;
    }
}

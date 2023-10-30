<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\RemoveHostsFromGroupResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description RemoveHostsFromGroup
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description RemoveHostsFromGroup
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description WB662865
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'        => 'Code',
        'hostGroupId' => 'HostGroupId',
        'hostId'      => 'HostId',
        'message'     => 'Message',
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
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

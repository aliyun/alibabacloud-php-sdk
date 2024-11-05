<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveHostsToNetworkDomainResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The return code that indicates whether the host is added to the network domain.
     *
     * > The code LICENSE_OUT_OF_LIMIT indicates that the network domain feature is not supported by the current Bastionhost edition.
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The host ID.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The error message that is returned.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'hostId'  => 'HostId',
        'message' => 'Message',
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

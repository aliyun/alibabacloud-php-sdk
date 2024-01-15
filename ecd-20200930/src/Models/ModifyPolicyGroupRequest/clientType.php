<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class clientType extends Model
{
    /**
     * @description The type of client that you want to use to connect to the cloud desktop. Valid values:
     *
     * windows: the Windows client
     * linux: C-Key Series Cloud Computer TC and A Series Cloud Computer TC
     * macos: the macOS client
     * ios: the iOS client
     * android: the Android client
     * html5: the web client
     *
     * > By default, if you do not configure the ClientType-related parameters, all types of clients are allowed to connect to the cloud desktop.
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The logon method. This parameter specifies whether a specific type of the client is allowed to connect to the cloud desktop. Valid values:
     *
     * on: allowed.
     * off: disallowed.
     *
     * > By default, if you do not configure the ClientType-related parameters, all types of clients are allowed to log on to cloud desktops.
     * @example ON
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clientType' => 'ClientType',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

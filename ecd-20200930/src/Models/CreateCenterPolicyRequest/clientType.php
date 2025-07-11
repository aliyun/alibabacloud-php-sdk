<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class clientType extends Model
{
    /**
     * @description The type of the Alibaba Cloud Workspace client that end users can use to connect to cloud computers.
     *
     * Valid values:
     *
     *   html5: the web client.
     *   android: the Android client.
     *   ios: the iOS client.
     *   windows: the Windows client.
     *   macos: the macOS client.
     *
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description Specifies whether end users can use the specified type of Alibaba Cloud Workspace client to connect to cloud computers.
     *
     * >  If you don\\"t specify `ClientType`, any client can be used to connect to cloud computers.
     *
     * Valid values:
     *
     *   off: End users cannot use the specified type of Alibaba Cloud Workspace client to connect to cloud computers.
     *   on: End users can use the specified type of Alibaba Cloud Workspace client to connect to cloud computers.
     *
     * @example off
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clientType' => 'ClientType',
        'status' => 'Status',
    ];

    public function validate() {}

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

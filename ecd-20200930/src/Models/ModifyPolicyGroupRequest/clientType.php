<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class clientType extends Model
{
    /**
     * @description The type of the Alibaba Cloud Workspace client.
     *
     * >  If you do not specify the `ClientType` parameter, all types of the client are allowed by default.
     *
     * Valid values:
     *
     *   html5: web client
     *   android: Android client
     *   windows: Windows client
     *   ios: iOS client
     *   macos: macOS client
     *
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description Specifies whether to allow end users to use a specific type of the client to connect to cloud computers.
     *
     * >  If you do not specify the `ClientType` parameter, all types of the client are allowed by default.
     *
     * Valid values:
     *
     *   off
     *   on
     *
     * @example ON
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

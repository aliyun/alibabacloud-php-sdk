<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class clientType extends Model
{
    /**
     * @description The type of the client.
     *
     * Valid values:
     *
     *   html5: web clients
     *
     * <!-- -->
     *
     *   android: Android clients
     *
     * <!-- -->
     *
     *   linux: Alibaba Cloud Workspace clients
     *
     * <!-- -->
     *
     *   ios: iOS clients
     *
     * <!-- -->
     *
     *   windows: Windows clients
     *
     * <!-- -->
     *
     *   macos: macOS clients
     *
     * <!-- -->
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description Specifies whether a specific client type can be used to connect to the cloud desktop.
     *
     * Valid values:
     *
     *   OFF: Clients of the specified type cannot be used to connect to cloud desktops.
     *
     * <!-- -->
     *
     *   ON: Clients of the specified type can be used to connect to cloud desktops.
     *
     * <!-- -->
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

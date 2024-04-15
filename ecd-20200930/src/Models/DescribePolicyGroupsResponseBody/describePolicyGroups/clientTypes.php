<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class clientTypes extends Model
{
    /**
     * @description The client type.
     *
     * Valid values:
     *
     *   html5: web client
     *   linux: WUYING hardware terminal
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
     * @description Indicates whether a specific type of client is allowed to connect to the cloud desktop.
     *
     * Valid values:
     *
     *   OFF
     *   ON
     *
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
     * @return clientTypes
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

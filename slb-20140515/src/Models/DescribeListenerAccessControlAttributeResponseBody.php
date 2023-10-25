<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeListenerAccessControlAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether the whitelist is enabled. Valid values:
     *
     *   **open_white_list**: the whitelist is enabled.
     *   **close**: the whitelist is disabled.
     *
     * @example open_white_list
     *
     * @var string
     */
    public $accessControlStatus;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried ACLs.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceItems;
    protected $_name = [
        'accessControlStatus' => 'AccessControlStatus',
        'requestId'           => 'RequestId',
        'sourceItems'         => 'SourceItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlStatus) {
            $res['AccessControlStatus'] = $this->accessControlStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceItems) {
            $res['SourceItems'] = $this->sourceItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeListenerAccessControlAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlStatus'])) {
            $model->accessControlStatus = $map['AccessControlStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceItems'])) {
            $model->sourceItems = $map['SourceItems'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnAttachmentResponseBody extends Model
{
    /**
     * @description The status code returned by the current operation. **200** indicates that the operation is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The timestamp generated when the IPsec-VPN connection was established. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1658201810000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The information returned by the current operation.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 88187252-0E26-3C4D-9D1D-32A04454EBBA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the current operation is successful.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0wb09rama8qwwgfn****
     *
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'code'            => 'Code',
        'createTime'      => 'CreateTime',
        'message'         => 'Message',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'vpnConnectionId' => 'VpnConnectionId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnAttachmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponseBody;

use AlibabaCloud\Tea\Model;

class hostShareKey extends Model
{
    /**
     * @description The fingerprint of the private key.
     *
     * @example 10427
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @example name
     *
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @example 1644287246
     *
     * @var int
     */
    public $lastModifyKeyAt;

    /**
     * @example ***
     *
     * @var string
     */
    public $privateKeyFingerPrint;
    protected $_name = [
        'hostShareKeyId'        => 'HostShareKeyId',
        'hostShareKeyName'      => 'HostShareKeyName',
        'lastModifyKeyAt'       => 'LastModifyKeyAt',
        'privateKeyFingerPrint' => 'PrivateKeyFingerPrint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostShareKeyId) {
            $res['HostShareKeyId'] = $this->hostShareKeyId;
        }
        if (null !== $this->hostShareKeyName) {
            $res['HostShareKeyName'] = $this->hostShareKeyName;
        }
        if (null !== $this->lastModifyKeyAt) {
            $res['LastModifyKeyAt'] = $this->lastModifyKeyAt;
        }
        if (null !== $this->privateKeyFingerPrint) {
            $res['PrivateKeyFingerPrint'] = $this->privateKeyFingerPrint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostShareKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostShareKeyId'])) {
            $model->hostShareKeyId = $map['HostShareKeyId'];
        }
        if (isset($map['HostShareKeyName'])) {
            $model->hostShareKeyName = $map['HostShareKeyName'];
        }
        if (isset($map['LastModifyKeyAt'])) {
            $model->lastModifyKeyAt = $map['LastModifyKeyAt'];
        }
        if (isset($map['PrivateKeyFingerPrint'])) {
            $model->privateKeyFingerPrint = $map['PrivateKeyFingerPrint'];
        }

        return $model;
    }
}

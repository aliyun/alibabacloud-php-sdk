<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysResponseBody;

use AlibabaCloud\Tea\Model;

class hostShareKeys extends Model
{
    /**
     * @description The number of the associated host accounts.
     *
     * @example 1
     *
     * @var int
     */
    public $hostAccountCount;

    /**
     * @description The ID of the host account.
     *
     * @example 10247
     *
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @description The name of the shared key.
     *
     * @example name
     *
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @description The time when the shared key was last modified.
     *
     * @example 1644806406
     *
     * @var int
     */
    public $lastModifyKeyAt;

    /**
     * @description The fingerprint of the private key.
     *
     * @example ****
     *
     * @var string
     */
    public $privateKeyFingerPrint;
    protected $_name = [
        'hostAccountCount'      => 'HostAccountCount',
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
        if (null !== $this->hostAccountCount) {
            $res['HostAccountCount'] = $this->hostAccountCount;
        }
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
     * @return hostShareKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountCount'])) {
            $model->hostAccountCount = $map['HostAccountCount'];
        }
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

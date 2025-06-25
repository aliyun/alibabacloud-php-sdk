<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostShareKeyResponseBody;

use AlibabaCloud\Dara\Model;

class hostShareKey extends Model
{
    /**
     * @var string
     */
    public $hostShareKeyId;

    /**
     * @var string
     */
    public $hostShareKeyName;

    /**
     * @var int
     */
    public $lastModifyKeyAt;

    /**
     * @var string
     */
    public $privateKeyFingerPrint;
    protected $_name = [
        'hostShareKeyId' => 'HostShareKeyId',
        'hostShareKeyName' => 'HostShareKeyName',
        'lastModifyKeyAt' => 'LastModifyKeyAt',
        'privateKeyFingerPrint' => 'PrivateKeyFingerPrint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysResponseBody;

use AlibabaCloud\Tea\Model;

class passkeys extends Model
{
    /**
     * @description The time when the passkey was created. The value is a timestamp.
     *
     * @example 1737450279
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The time when the passkey was last used. The value is a timestamp.
     *
     * @example 1737450390
     *
     * @var string
     */
    public $lastUseDate;

    /**
     * @description The ID of the passkey.
     *
     * @example PASSKEY-CuZjEHhWcr7GIQOMGvkS
     *
     * @var string
     */
    public $passkeyId;

    /**
     * @description The name of the passkey.
     *
     * @example device1
     *
     * @var string
     */
    public $passkeyName;
    protected $_name = [
        'createDate'  => 'CreateDate',
        'lastUseDate' => 'LastUseDate',
        'passkeyId'   => 'PasskeyId',
        'passkeyName' => 'PasskeyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->lastUseDate) {
            $res['LastUseDate'] = $this->lastUseDate;
        }
        if (null !== $this->passkeyId) {
            $res['PasskeyId'] = $this->passkeyId;
        }
        if (null !== $this->passkeyName) {
            $res['PasskeyName'] = $this->passkeyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passkeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['LastUseDate'])) {
            $model->lastUseDate = $map['LastUseDate'];
        }
        if (isset($map['PasskeyId'])) {
            $model->passkeyId = $map['PasskeyId'];
        }
        if (isset($map['PasskeyName'])) {
            $model->passkeyName = $map['PasskeyName'];
        }

        return $model;
    }
}

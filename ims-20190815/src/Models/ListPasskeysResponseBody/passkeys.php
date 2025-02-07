<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysResponseBody;

use AlibabaCloud\Dara\Model;

class passkeys extends Model
{
    /**
     * @var string
     */
    public $createDate;
    /**
     * @var string
     */
    public $lastUseDate;
    /**
     * @var string
     */
    public $passkeyId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

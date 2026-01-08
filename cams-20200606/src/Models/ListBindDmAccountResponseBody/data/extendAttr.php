<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListBindDmAccountResponseBody\data;

use AlibabaCloud\Dara\Model;

class extendAttr extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $sendType;
    protected $_name = [
        'accountName' => 'AccountName',
        'sendType' => 'SendType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->sendType) {
            $res['SendType'] = $this->sendType;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['SendType'])) {
            $model->sendType = $map['SendType'];
        }

        return $model;
    }
}

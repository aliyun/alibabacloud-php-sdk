<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models\ListSubAccountInfoResult;

use AlibabaCloud\Dara\Model;

class subAccountInfos extends Model
{
    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'accountName' => 'accountName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
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
        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }

        return $model;
    }
}

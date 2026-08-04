<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAgRelationCountAndQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $accountCount;

    /**
     * @var string
     */
    public $mpk;

    /**
     * @var bool
     */
    public $nullObject;

    /**
     * @var int
     */
    public $quota;
    protected $_name = [
        'accountCount' => 'AccountCount',
        'mpk' => 'Mpk',
        'nullObject' => 'NullObject',
        'quota' => 'Quota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCount) {
            $res['AccountCount'] = $this->accountCount;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->nullObject) {
            $res['NullObject'] = $this->nullObject;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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
        if (isset($map['AccountCount'])) {
            $model->accountCount = $map['AccountCount'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['NullObject'])) {
            $model->nullObject = $map['NullObject'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        return $model;
    }
}

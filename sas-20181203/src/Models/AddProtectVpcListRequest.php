<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddProtectVpcListRequest extends Model
{
    /**
     * @var string
     */
    public $addVpcInstanceIdList;
    /**
     * @var string
     */
    public $delVpcInstanceIdList;
    protected $_name = [
        'addVpcInstanceIdList' => 'AddVpcInstanceIdList',
        'delVpcInstanceIdList' => 'DelVpcInstanceIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addVpcInstanceIdList) {
            $res['AddVpcInstanceIdList'] = $this->addVpcInstanceIdList;
        }

        if (null !== $this->delVpcInstanceIdList) {
            $res['DelVpcInstanceIdList'] = $this->delVpcInstanceIdList;
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
        if (isset($map['AddVpcInstanceIdList'])) {
            $model->addVpcInstanceIdList = $map['AddVpcInstanceIdList'];
        }

        if (isset($map['DelVpcInstanceIdList'])) {
            $model->delVpcInstanceIdList = $map['DelVpcInstanceIdList'];
        }

        return $model;
    }
}
